<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Comentario;
use App\Models\Usuario;
use App\Models\Compra;
use App\Models\Foto;

use DateTime;

class ProductoController extends Controller
{
    //
    public function misProductos() {
        $usuario = \Session::get('usuario'); 

        $listaProductos = Usuario::find($usuario[0])->productos;

        $categorias = Categoria::where('esta_activada', 1)->get();

        return view('Cliente.mis-productos', compact('categorias', 'listaProductos'));        
    }

    public function buscarProducto(Request $request) {
        $categorias = Categoria::where('esta_activada', 1)->get();
        $valores = $request->all();

        $categoria = $valores['categoria'];
        $busqueda = $valores['busqueda'];            

        if($categoria == 0) {
            $productos = DB::table('productos')->where('esta_consignado', 1)->where('nombre', 'like', '%'.$busqueda.'%')->get();
        } else {
            $productos = DB::table('productos')->where('categoria_id', $categoria)->where('esta_consignado', 1)->where('nombre', 'like', '%'.$busqueda.'%')->get();
        }

        $listaProductos = $productos;        

        if(\Session::has('usuario')) {
            $usuario = \Session::get('usuario');
            
            $tipoUsuario = Usuario::find($usuario[0])->rol_id;

            switch($tipoUsuario) {
                case 1:
                    $categorias = Categoria::all();
                    return view('Supervisor.busqueda', compact('categorias', 'listaProductos'));
                case 2:
                    return view('Encargado.busqueda', compact('categorias', 'listaProductos'));
                case 4:
                    return view('listar-productos', compact('categorias', 'listaProductos'));
            }            
        } else {            
            return view('Anonimo.listar-productos', compact('categorias', 'listaProductos'));
        }
    }

    public function listarPorCategoria($id) {
        $categorias = Categoria::where('esta_activada', 1)->get();

        //$listaProductos = Producto::where('categoria_id', $id)->where('esta_consignado', 1)->get();        
        $listaProductos = Categoria::find($id)->productos->where('esta_consignado', 1);

        if(\Session::has('usuario')) {
            return view('listar-productos', compact('categorias', 'listaProductos'));
        } else {            
            return view('Anonimo.listar-productos', compact('categorias', 'listaProductos'));
        }        
    }

    public function verProducto($id) {
        $categorias = Categoria::where('esta_activada', 1)->get();

        $producto = Producto::find($id);
        $fotos = $producto->fotos;
        $comentarios = $producto->comentarios;
        $usuarios = [];
        
        $comentariosUsuarios = [];

        foreach($comentarios as $comentario) {
            $comentariosUsuarios[] = ['usuario'=>$comentario->usuario, 'comentario'=>$comentario];
        }

        if(\Session::has('usuario')) {
            $usuario = \Session::get('usuario');                        
            if($usuario[0] == $producto->usuario_id) {
                return view('Cliente.producto-vendedor', compact('categorias', 'producto', 'fotos', 'comentariosUsuarios'));
            } else {
                return view('Cliente.producto-comprador', compact('categorias', 'producto', 'fotos', 'comentariosUsuarios'));
            }
        } else {            
            return view('Anonimo.producto-anonimo', compact('categorias', 'producto', 'fotos', 'comentariosUsuarios'));
        }          
    }

    public function kardexProducto($id) {
        $categorias = Categoria::all();

        $producto = Producto::find($id);

        $foto = $producto->fotos->first();

        $vendidos = Compra::where('producto_id', $id)->where('esta_validada', 1)->get()->count();

        $interesados = $producto->comentarios->count();

        return view('Supervisor.kardex', compact('categorias', 'producto', 'foto', 'vendidos', 'interesados'));
    }

    public function verNoConsignado($id) {
        $categorias = Categoria::where('esta_activada', 1)->get();

        $producto = Producto::find($id);
        $fotos = $producto->fotos;

        return view('Encargado.product', compact('categorias', 'producto', 'fotos'));
    }

    public function consignarProducto(Request $request, $id) {
        $valores = $request->all();

        if(is_null($valores['porcentaje'])) {
            return back();
        }

        $producto = Producto::find($id);

        $producto->porcentaje = $valores['porcentaje'];
        $producto->esta_consignado = 1;
        $producto->razon_consigna = '';
        $producto->save();

        return redirect('inicio-encargado');    
    }

    public function noConsignarProducto(Request $request, $id) {
        $valores = $request->all();

        if(is_null($valores['razon_consigna'])) {
            return back();
        }

        $producto = Producto::find($id);

        $producto->razon_consigna = $valores['razon_consigna'];
        $producto->save();

        return redirect('inicio-encargado');    
    }

    public function encargadoConsignados() {
        $categorias = Categoria::where('esta_activada', 1)->get();

        $productos = Producto::where('esta_consignado', 1)->get();

        return view('Encargado.producto-consignado', compact('categorias', 'productos'));
    }

    public function verConsignado($id) {
        $categorias = Categoria::where('esta_activada', 1)->get();

        $producto = Producto::find($id);
        $fotos = $producto->fotos;

        return view('Encargado.producto-no-consignado', compact('categorias', 'producto', 'fotos'));
    }

    public function desconsignarProducto($id) {
        $producto = Producto::find($id);

        $producto->esta_consignado = 0;
        $producto->save();

        return redirect('encargado-consignados');    
    }

    public function verProductoVendedor($id) {
        $categorias = Categoria::where('esta_activada', 1)->get();

        $producto = Producto::find($id);

        $comentarios = $producto->comentarios;
        $fotos = $producto->fotos;

        $comentariosUsuarios = [];

        foreach($comentarios as $comentario) {
            $comentariosUsuarios[] = ['usuario'=>$comentario->usuario, 'comentario'=>$comentario];
        }        

        return view('Cliente.producto-vendedor', compact('categorias', 'producto', 'fotos', 'comentariosUsuarios')); 
    }

    public function formularioCrearProducto() {
        $categorias = Categoria::where('esta_activada', 1)->get();

        return view('Cliente.crear-producto', compact('categorias'));
    }

    public function crearProducto(Request $request) {
        if(!$request->hasFile('producto_foto')) {
            return back();
        }

        $valores = $request->all();

        $usuario = \Session::get('usuario'); 

        $producto = new Producto;
        $producto->nombre = $valores['nombre'];
        $producto->piezas = $valores['piezas'];
        $producto->descripcion = $valores['descripcion'];
        $producto->precio = $valores['precio'];
        $producto->porcentaje = 0;
        $producto->razon_consigna = '';
        $producto->categoria_id = $valores['categoria'];
        $producto->fecha_publicacion = new DateTime;
        $producto->usuario_id = $usuario[0];
        $producto->save();

        $file = $request->file('producto_foto');
        $rutaDestino = 'img/productos/';
        $fileName = 'producto'.time().'-'.$file->getClientOriginalName();
        $cargaExitosa = $request->file('producto_foto')->move($rutaDestino, $fileName);

        $foto = new Foto;
        $foto->dato_foto = $rutaDestino.$fileName;
        $foto->producto_id = $producto->id;
        $foto->save();

        return redirect('mis-productos');
    }

    public function formularioEditarProducto($id) {
        $categorias = Categoria::where('esta_activada', 1)->get();        

        $producto = Producto::find($id);      
        
        $fotos = $producto->fotos;

        return view('Cliente.editar-producto', compact('categorias', 'producto', 'fotos'));
    }

    public function editarProducto(Request $request, $id) {
        $valores = $request->all();

        $producto = Producto::find($id);

        $producto->nombre = $valores['nombre'];
        $producto->piezas = $valores['piezas'];
        $producto->descripcion = $valores['descripcion'];
        $producto->precio = $valores['precio'];
        $producto->categoria_id = $valores['categoria'];
        $producto->save();

        return redirect('mis-productos');
    }

    public function eliminarProducto($id) {
        $producto = Producto::find($id);
        $producto->delete();

        return back();
    }

}
