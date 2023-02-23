<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

use App\Models\Compra;
use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Usuario;

class CompraController extends Controller
{
    //
    public function misCompras() {
        $categorias = Categoria::where('esta_activada', 1)->get();

        $usuario = \Session::get('usuario'); 

        $compras = Usuario::find($usuario[0])->compras;

        $compraProducto = [];

        foreach($compras as $compra) {
            $compraProducto[] = ['compra'=>$compra, 'producto'=>$compra->producto];
        }

        return view('Cliente.mis-compras', compact('categorias', 'compraProducto'));
    }

    public function verCompra($id) {
        $categorias = Categoria::where('esta_activada', 1)->get();

        $compra = Compra::find($id);

        $producto = $compra->producto;
        $foto = $producto->fotos->first();

        return view('Cliente.detalles-compra', compact('categorias', 'compra', 'producto', 'foto'));
    }

    public function formularioCompra(Request $request, $id) {
        $categorias = Categoria::where('esta_activada', 1)->get();
        
        $valores = $request->all();

        $cantidad = $valores['cantidad'];

        $producto = Producto::find($id);

        return view('Cliente.pagar-compra', compact('categorias', 'producto', 'cantidad'));
    }

    public function compraEnLinea($id, $cantidad) {
        $usuario = \Session::get('usuario');
  
        $compra = new Compra;
        $compra->esta_validada = 1;
        $compra->piezas = $cantidad;
        $compra->producto_id = $id;
        $compra->usuario_id = $usuario[0];
        $compra->save();
        
        $producto = Producto::find($id);
        $producto->piezas -= $cantidad;
        $producto->save();
        $vendedor = $producto->usuario;

        // Enviar correo
        $asunto = "Compra de producto";
        $datos = array('producto'=>$producto->nombre, "cantidad" => $cantidad);
        $para = $vendedor->email;
        Mail::send('email', $datos, function($msj) use($asunto, $para) {
            $msj->from("mercadotec2022@gmail.com", "MercadoTec");
            $msj->subject($asunto);
            $msj->to($para);
        });

        return redirect('mis-compras');
    }

    public function compraPorBanco($id, $cantidad) {
        $usuario = \Session::get('usuario');
  
        $compra = new Compra;
        $compra->esta_validada = 0;
        $compra->piezas = $cantidad;
        $compra->producto_id = $id;
        $compra->usuario_id = $usuario[0];
        $compra->save();

        $producto = Producto::find($id);
        $vendedor = $producto->usuario;

        // Enviar correo
        $asunto = "Compra de producto";
        $datos = array('producto'=>$producto->nombre, "cantidad" => $cantidad);
        $para = $vendedor->email;
        Mail::send('email', $datos, function($msj) use($asunto, $para) {
            $msj->from("mercadotec2022@gmail.com", "MercadoTec");
            $msj->subject($asunto);
            $msj->to($para);
        });
        
        return redirect('mis-compras');
    }

    public function calificarCompra(Request $request, $id) {
        $valores = $request->all();

        $compra = Compra::find($id);

        $compra->calificacion = $valores['estrellas'];
        $compra->save();

        return redirect('mis-compras');
    }

    public function comprasContador() {
        $detallesCompra = [];

        $compras = Compra::all();

        foreach($compras as $compra) {
            $comprador = $compra->usuario;
            $producto = $compra->producto;
            $vendedor = $producto->usuario;

            $detallesCompra[] = ['compra'=>$compra, 'vendedor'=>$vendedor->nombre, 'comprador'=>$comprador->nombre];
        }

        return view('Contador.compras-contador', compact('detallesCompra'));
    }

    public function vendedoresContador() {
        $usuarios = Usuario::all();

        $vendedores = [];

        foreach($usuarios as $usuario) {
            $productos = $usuario->productos;
            $ventas = 0;
            foreach($productos as $producto) {
                $compras = $producto->compras->count();

                if($compras != 0) {
                    $ventas += $compras;
                }
            }
            if($ventas > 0) {
                $vendedores[] = ['usuario'=>$usuario, 'ventas'=>$ventas];
            }
        }

        return view('Contador.usuarios-vendedores', compact('vendedores'));
    }

    public function subirVoucher(Request $request, $id) {
        $compra = Compra::find($id);
        
        $file = $request->file('producto_foto');
        $rutaDestino = 'img/vouchers/';
        $fileName = 'voucher'.time().'-'.$file->getClientOriginalName();
        $cargaExitosa = $request->file('producto_foto')->move($rutaDestino, $fileName);

        $compra->voucher = $rutaDestino.$fileName;
        $compra->save();

        return redirect('mis-compras');
    }
}
