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

        flash('Se ha agregado el admin ' .$usuarios->nombre)->success()->important();
        return redirect()->route('usuarios.index');
    }

    public function index () {
        $usuarios = User::orderBy('id', 'ASC')->paginate(10);
        return view('admin.usuarios.listar')->with('usuarios', $usuarios);
    }

    public function destroy ($id) {
        $usuario = User::find($id);
        $usuario->delete();

        flash('Se ha eliminado al ' .$usuario->rol. ' '.$usuario->nombre)->error()->important();
        return redirect()->route('usuarios.index');
    }

    public function search (Request $request) {
        $search = $request->apellido;
        
        $usuarios = User::where('apellido', 'LIKE', "%{$search}%")->get();

        if($usuarios->count() > 0)
            return view('admin.usuarios.listar')->with('usuarios', $usuarios);
        else {
            flash('No se encontraron coincidencias ')->warning()->important();
            return redirect()->route('usuarios.index');
        }
    }
}
