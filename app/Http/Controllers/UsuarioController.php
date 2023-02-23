<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categoria;
use App\Models\Usuario;
use App\Models\Producto;
use App\Models\Rol;
use App\Models\Compra;
use App\Models\Pago;

use DateTime;

class UsuarioController extends Controller
{
    // Supervisor
    public function inicioSupervisor() {
        $categorias = Categoria::all();

        $productosConsignados = Producto::where('esta_consignado', 1)->get()->count();
        $productosNoConsignados = Producto::where('esta_consignado', 0)->get()->count();

        $totalUsuarios = Usuario::all()->count();
        $usuariosDelDia = Usuario::whereDate('fecha_alta', new DateTime)->count();

        $variables = ['consignados'=>$productosConsignados, 'noConsignados'=>$productosNoConsignados, 'totalUsuarios' => $totalUsuarios, 'usuariosDia' => $usuariosDelDia];    

        return view('Supervisor.dashboard', compact('categorias', 'variables'));
    }

    public function crudCategorias() {
        $categorias = Categoria::all();

        return view('Supervisor.dash_categorias', compact('categorias'));
    }

    public function crudUsuarios() {
        $categorias = Categoria::all();

        $usuarios = Usuario::all();

        $roles = Rol::all();

        return view('Supervisor.dash_usuarios', compact('categorias', 'usuarios', 'roles'));
    }

    public function formularioCrearUsuario() {
        $categorias = Categoria::all();

        return view('Supervisor.nuevo_usuario', compact('categorias'));
    }

    public function crearUsuario(Request $request) {
        $valores = $request->all();

        $nuevo = new Usuario;
        $nuevo->nombre = $valores['nombre'];
        $nuevo->email = $valores['email'];
        $nuevo->password = $valores['password'];
        $nuevo->fecha_alta = new DateTime;
        $nuevo->rol_id = $valores['rol'];
        $nuevo->save();

        return back();
    }

    public function formularioCrearCategoria() {
        $categorias = Categoria::all();

        return view('Supervisor.nueva_categoria', compact('categorias'));
    }

    public function formularioEditarCategoria($id) {
        $categorias = Categoria::all();

        $categoria = Categoria::find($id);

        return view('Supervisor.actualizar_categoria', compact('categorias', 'categoria'));
    }

    public function formularioEditarUsuario($id) {
        $categorias = Categoria::all();

        $usuario = Usuario::find($id);

        $roles = Rol::all();

        return view('Supervisor.actualizar_usuario', compact('categorias', 'usuario', 'roles'));
    }    
    
    public function editarUsuario(Request $request, $id) {
        $valores = $request->all();

        $usuario = Usuario::find($id);

        $usuario->nombre = $valores['nombre'];
        $usuario->email = $valores['email'];
        $usuario->rol_id = $valores['rol'];
        $usuario->save();

        return redirect('crud-usuarios');
    }

    public function listarSolicitudPassword() {
        $solicitudUsuario = Usuario::where('solicita_password', 1)->get();
        
        $categorias = Categoria::all();

        return view('Supervisor.solicitud_usuario', compact('categorias', 'solicitudUsuario'));
    }

    public function restablecerPassword($id) {
        $usuario = Usuario::find($id);

        $usuario->solicita_password = 0;
        $usuario->password = $usuario->password_temporal;
        $usuario->password_temporal = '';
        $usuario->save();

        return back();
    }

    public function listarVendedores() {
        $clientes = Usuario::where('rol_id', 4)->get();

        $vendedores = [];

        foreach($clientes as $cliente) {            
            if($cliente->productos->count() > 0) {
                $vendedores[] = $cliente;
            }
        }

        $categorias = Categoria::all();

        return view('Supervisor.historial', compact('categorias', 'vendedores'));
    }

    public function historialVendedor($id) {
        $categorias = Categoria::all();

        $vendedor = Usuario::find($id);

        $listaProductos = $vendedor->productos;
        $productosConsignados = $listaProductos->where('esta_consignado', 1);

        $transacciones = 0;

        $articulosVendidos = 0;

        $totalCalificaciones = 0;
        $calificaciones = 0;

        foreach($productosConsignados as $producto) {
            $compras = $producto->compras->where('esta_validada', 1);

            foreach($compras as $compra) {
                $transacciones++;
                $articulosVendidos += $compra->piezas;

                if(!is_null($compra->calificacion)) {
                    $calificaciones += $compra->calificacion;
                    $totalCalificaciones++;
                }             
            }
        }

        $calificacion = 0;
        if($totalCalificaciones != 0) {
            $calificacion = $calificaciones / $totalCalificaciones;
        }

        $consignados = $productosConsignados->count();
        $noConsignados = $listaProductos->where('esta_consignado', 0)->count();

        $productos = ['productos'=>$listaProductos, 'consignados'=>$consignados, 'noConsignados'=>$noConsignados];

        return view('Supervisor.historial_vendedor', compact('categorias', 'vendedor', 'productos', 'transacciones', 'articulosVendidos', 'calificacion'));
    }

    // Encargado

    public function inicioEncargado() {
        $categorias = Categoria::where('esta_activada', 1)->get();

        $productos = Producto::where('esta_consignado', 0)->get();

        return view('Encargado.productos-encargado', compact('categorias', 'productos'));
    }

    public function filtroProductoEncargado(Request $request) {
        $categorias = Categoria::where('esta_activada', 1)->get();

        $valores = $request->all();

        $categoria = $valores['categoria'];

        if($categoria == 0) {
            $productos = Producto::where('esta_consignado', 0)->get();
        } else {
            $productos = Producto::where('categoria_id', $categoria)->where('esta_consignado', 0)->get();
        }

        return view('Encargado.productos-encargado', compact('categorias', 'productos'));
    }

    public function filtroProductoConsignadoEncargado(Request $request) {
        $categorias = Categoria::where('esta_activada', 1)->get();

        $valores = $request->all();

        $categoria = $valores['categoria'];

        if($categoria == 0) {
            $productos = Producto::where('esta_consignado', 1)->get();
        } else {
            $productos = Producto::where('categoria_id', $categoria)->where('esta_consignado', 1)->get();
        }

        return view('Encargado.producto-consignado', compact('categorias', 'productos'));
    }

    public function restablecerPasswordEncargado() {
        $categorias = Categoria::where('esta_activada', 1)->get();

        $usuarios = Usuario::where('solicita_password', 1)->where('rol_id', '!=', 1)->get();

        return view('Encargado.solicitud-password', compact('categorias', 'usuarios'));
    }

    public function inicioCliente() {
        $categorias = Categoria::where('esta_activada', 1)->get();

        $productoDesc = [];
        $productos = Producto::where('esta_consignado', 1)->latest()->take(6)->get();

        foreach($productos as $producto) {
            $foto = $producto->fotos->first();
            $categoria = $producto->categoria;
            $productosDesc[] = ['producto'=>$producto, 'foto'=>$foto, 'categoria'=>$categoria->nombre];
        }

        return view('Cliente.inicio', compact('categorias', 'productosDesc'));
    }

    public function inicioContador() {
        $pagos = Pago::all();

        $detallesPago = [];

        foreach($pagos as $pago) {
            $vendedor = Usuario::find($pago->usuario_id);            
            if($pago->esta_pendiente) {
                array_unshift($detallesPago, ['pago'=>$pago, 'vendedor'=>$vendedor]);
            } else {
                array_push($detallesPago, ['pago'=>$pago, 'vendedor'=>$vendedor]);
            }
        }

        return view('Contador.pagos-contador', compact('detallesPago'));
    }

    public function detalleVendedor($id) {
        $vendedor = Usuario::find($id);
        $productos = $vendedor->productos;

        $ventas = [];

        foreach($productos as $producto) {
            $compras = $producto->compras;
            foreach($compras as $compra) {
                if(is_null($compra->pago_id) && $compra->esta_validada) {
                    $producto = Producto::find($compra->producto_id);
                    $monto = $producto->precio * $compra->piezas;
                    $ventas[] = ['id'=>$compra->id, 'producto'=>$producto->nombre, 'monto'=>$monto];
                }
            }
        }
        return view('Contador.ventas-usuario', compact('vendedor', 'ventas'));
    }

    public function crearPago(Request $request, $id) {
        $valores = $request->all();
        $ventas = $valores['ventas'];

        $pago = new Pago;
        $pago->esta_pendiente = 1;
        $pago->usuario_id = $id;
        $pago->save();

        foreach($ventas as $venta) {
            $compra = Compra::find($venta);
            $compra->pago_id = $pago->id;
            $compra->save();
        }

        return redirect('inicio-contador');
    }

    public function editarPago($id) {
        $pago = Pago::find($id);

        $vendedor = $pago->usuario;

        $ventasPago = $pago->compras;

        $productos = $vendedor->productos;

        $desgloseVentas = [];               

        foreach($ventasPago as $venta) {
            $producto = $venta->producto;
            $monto = $producto->precio * $venta->piezas;
            $desgloseVentas[] = ['id'=>$venta->id, 'producto'=>$producto->nombre, 'monto'=>$monto];
        }

        $ventas = []; 

        foreach($productos as $producto) {
            $compras = $producto->compras;
            foreach($compras as $compra) {
                if(is_null($compra->pago_id) && $compra->esta_validada) {
                    $producto = $compra->producto;
                    $monto = $producto->precio * $compra->piezas;
                    $ventas[] = ['id'=>$compra->id, 'producto'=>$producto->nombre, 'monto'=>$monto];
                }
            }
        }
        return view('Contador.editar-pago', compact('vendedor', 'pago', 'desgloseVentas', 'ventas'));
    }

    public function actualizarPago(Request $request, $id) {
        $valores = $request->all();
        $ventas = $valores['ventas'];

        $pago = Pago::find($id);

        $comprasPago = $pago->compras;

        foreach($comprasPago as $compra) {
            $compra->pago_id = null;
            $compra->save();
        }

        foreach($ventas as $venta) {
            $compra = Compra::find($venta);
            $compra->pago_id = $pago->id;
            $compra->save();
        }

        return redirect('inicio-contador');
    }

    public function verPago($id) {
        $pago = Pago::find($id);
        $vendedor = $pago->usuario;
        $compras = $pago->compras;

        $totalPago = 0;

        $detalleCompra = [];

        foreach($compras as $compra) {
            $producto = $compra->producto;
            $subtotal = $compra->piezas * $producto->precio;
            $total = $subtotal * (1 - $producto->porcentaje/100);
            $detalleCompra[] = ['compra'=>$compra, 'producto'=>$producto, 'subtotal'=>$subtotal, 'total'=> $total];
            $totalPago += $total;
        }
        
        return view('Contador.pago-realizado-contador', compact('pago', 'vendedor', 'detalleCompra', 'totalPago'));
    }

    public function pagarVendedor($id) {
        $pago = Pago::find($id);

        $pago->esta_pendiente = 0;
        $pago->save();

        return redirect('inicio-contador');
    }

    public function detalleCompraContador($id) {
        $compra = Compra::find($id);
        $producto = $compra->producto;
        $total = $compra->piezas * $producto->precio;

        return view('Contador.detalle-compra', compact('compra', 'producto', 'total'));
    }

    public function validarCompra($id) {
        $compra = Compra::find($id);

        $compra->esta_validada = 1;        
        $compra->save();

        $producto = $compra->producto;
        $producto->piezas -= $compra->piezas;
        $producto->save();

        return redirect('compras-contador');
    }
}
