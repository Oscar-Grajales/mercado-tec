<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categoria;

class CategoriaController extends Controller
{
    //
    public function obtenerCategorias() {
        $categorias = Categoria::where('esta_activada', 1)->get(); 

        if(\Session::has('usuario')) {
            return view('Cliente.categorias', compact('categorias'));
        } else {            
            return view('Anonimo.categorias', compact('categorias'));
        }
    }

    public function crearCategoria(Request $request) {
        $valores = $request->all();

        $categoria = new Categoria;
        $categoria->nombre = $valores['nombre'];
        $categoria->esta_activada = $valores['esta_activada'];
        $categoria->save();

        return redirect('crud-categorias');
    } 

    public function editarCategoria(Request $request, $id) {
        $valores = $request->all();

        $categoria = Categoria::find($id);
        
        $categoria->nombre = $valores['nombre'];
        $categoria->esta_activada = $valores['esta_activada'];
        $categoria->save();

        return redirect('crud-categorias');
    }

    public function eliminarCategoria($id) {
        $categoria = Categoria::find($id);

        $categoria->delete();

        return back();
    }
}
