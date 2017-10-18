<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;
use App\Http\Reuqets\UserRequest;
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
            $representante->save();
            event(new UserEvent($representante));
            flash('Se ha agregado el administrador ' .$representante->nombre)->success()->important();
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
                return view('homepage');
            }
            else {
                flash('Credenciales incorrectas')->error()->important();
                return view('homepage');
            }
        }
    }

    public function logout () {
        Auth::logout();

        return view('homepage');
    }


}
