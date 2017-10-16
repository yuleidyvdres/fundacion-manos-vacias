<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class RepresentanteController extends Controller
{
    public function create () {
        return view('auth.register')->with('title', 'Registrarse');
    }

    public function store (Request $request) {
        $representante = new User($request->all());
        $representante->password = bcrypt($request->password);
        $representante->save();

        return redirect()->route('representante.create');
    }

    public function authentificate (Request $request) {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'rol' => 'Admin'])) {
            return redirect()->route('donaciones.index');
        }
        else{
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                return view('homepage');
             }
        }
    }

    public function logout () {
        Auth::logout();

        return view('homepage');
    }


}
