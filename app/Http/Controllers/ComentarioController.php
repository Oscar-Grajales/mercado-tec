<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comentario;

use DateTime;

class ComentarioController extends Controller
{
    //
    public function comentarProducto(Request $request, $id) {
        $valores = $request->all();

        $usuario = \Session::get('usuario'); 

        $comentario = new Comentario;

        $comentario->contenido = $valores['comentario'];
        $comentario->fecha_publicacion = new DateTime;
        $comentario->respuesta = '';
        $comentario->producto_id = $id;
        $comentario->usuario_id = $usuario[0];
        $comentario->save();

        return back();
    }

    public function responderComentario(Request $request, $id) {
        $valores = $request->all();

        $comentario = Comentario::find($id);

        $comentario->respuesta = $valores['respuesta'];
        $comentario->save();

        return back();
    }
}
