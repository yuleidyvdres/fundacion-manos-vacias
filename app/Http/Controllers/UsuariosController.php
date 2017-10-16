<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsuariosController extends Controller
{
    public function create () {
        return view('admin.usuarios.agregar')->with('title', 'Agregar Usuario');
    }

    public function store (Request $request) {
        $usuarios = new User($request->all());
        $usuarios->rol = 'Admin';
        $usuarios->password = bcrypt($request->password);
        $usuarios->save();

        return redirect()->route('usuarios.index');
    }

    public function index () {
        $usuarios = User::orderBy('id', 'ASC')->paginate(10);
        return view('admin.usuarios.listar')->with('usuarios', $usuarios);
    }

    public function destroy ($id) {
        $usuario = User::find($id);
        $usuario->delete();

        return redirect()->route('usuarios.index');
    }
}
