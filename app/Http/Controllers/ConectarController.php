<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Usuario;
use App\Models\Categoria;
use App\Models\Producto;

use DateTime;

class ConectarController extends Controller
{
    public function inicioAnonimo() {
        $categorias = Categoria::where('esta_activada', 1)->get();

        $productosDesc = [];
        $productos = Producto::where('esta_consignado', 1)->latest()->take(6)->get();

        foreach($productos as $producto) {
            $foto = $producto->fotos->first();
            $categoria = $producto->categoria;
            $productosDesc[] = ['producto'=>$producto, 'foto'=>$foto, 'categoria'=>$categoria->nombre];
        }

        return view('Anonimo.iniciar', compact('categorias', 'productosDesc'));
    }

    public function obtenerLogin() {
        return view('login');
    }

    public function nuevaCuenta() {
        return view('Anonimo.crear-cuenta');
    }

    public function crearCuenta(Request $request) {
        $valores = $request->all();

        $nuevo = new Usuario;
        $nuevo->nombre = $valores['nombre'];
        $nuevo->email = $valores['email'];
        $nuevo->password = $valores['password'];
        $nuevo->fecha_alta = new DateTime;
        $nuevo->rol_id = 4;
        $nuevo->save();

        return redirect('login');
    }

    public function iniciarSesion(Request $request) {
        $valores = $request->all();

        $email = $valores['email'];
        $password = $valores['password'];

        $usuario = Usuario::where(['email'=>$email, 'password'=>$password])->first();

        if(is_null($usuario)) {
            return back()->withErrors(['msg' => 'Email o contraseña incorrectos']);
        }

        $usuarioSession = [0 => $usuario->id];
        \Session::put('usuario', $usuarioSession );

        switch($usuario->rol_id) {
            case 1:
                return redirect('inicio-supervisor');
            case 2:
                return redirect('inicio-encargado');
            case 3:
                return redirect('inicio-contador');
            case 4:
                return redirect('inicio-cliente');
        }
            
    }

    public function cerrarSesion() {
        \Session::flush();

        return redirect('/');
    }

    public function formularioSolicitarPassword() {
        return view('cambiar-password');
    }

    public function solicitarPassword(Request $request) {
        $valores = $request->all();

        $usuario = Usuario::where('email', $valores['email'])->first();

        $usuario->solicita_password = 1;
        $usuario->password_temporal = $valores['nuevo_password'];
        $usuario->save();

        return redirect('/');
    }
}
