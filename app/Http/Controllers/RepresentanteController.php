<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;
use App\Http\Requests\UserRequest;
use App\Events\UserEvent;
use App\User;

class RepresentanteController extends Controller
{
    public function create () {
        return view('auth.register')->with('title', 'Registrarse');
    }

    public function store (UserRequest $request) {
        $representante = new User($request->all());
        $representante->password = bcrypt($request->password);
       
        $confirm = User::find($representante->id);
        if(!$confirm) {
            $representante->nombre = ucfirst(trans($request->nombre));
            $representante->apellido = ucfirst(trans($request->apellido));
            $representante->save();
            event(new UserEvent($representante, 'Agregar usuario'));
            flash('Se ha agregado el usuario ' .$representante->nombre)->success()->important();
            return redirect()->route('representante.create');
        } 
        else {
            flash('El usuario ' .$representante->id. ' ya existe')->error()->important();
            return redirect()->route('representante.create');
        }
    }

    public function authentificate (Request $request) {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'rol' => 'Admin'])) {
            return redirect()->route('donaciones.index');
        }
        else{
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->route('homepage');
            }
            else {
                flash('Credenciales incorrectas')->error()->important();
                return redirect()->route('homepage');
            }
        }
    }

    public function logout () {
        Auth::logout();

        return redirect()->route('homepage');
    }


}
