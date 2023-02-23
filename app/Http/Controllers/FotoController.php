<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Foto;

class FotoController extends Controller
{
    //
    public function guardarFoto(Request $request, $id) {
        $file = $request->file('producto_foto');
        $rutaDestino = 'img/productos/';
        $fileName = 'producto'.time().'-'.$file->getClientOriginalName();
        $cargaExitosa = $request->file('producto_foto')->move($rutaDestino, $fileName);

        $foto = new Foto;
        $foto->dato_foto = $rutaDestino.$fileName;
        $foto->producto_id = $id;
        $foto->save();

        return redirect('formulario-editar-producto/'.$id);
    }

    public function eliminarFoto($id) {
        $foto = Foto::find($id);
        $foto->delete();

        return back();
    }
}
