<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RepresentanteController extends Controller
{
    public function create () {
        return view('register')->with('title', 'Registrarse');
    }
}
