<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contacto;

class ContactoController extends Controller
{
    public function create () {
        return view('admin.contacto.agregar')->with('title', 'Agregar Donación');
    }

    public function store (Request $request) {
        $contacto = new contacto($request->all());
        $contacto->save();

        flash('Se ha agregado el atributo contacto ' .$contacto->nombre)->success()->important();
        return redirect()->route('contacto.index');
    }

    public function index () {
        $contacto = contacto::orderBy('id', 'ASC')->paginate(10);
        return view('admin.contacto.listar')->with('contacto', $contacto);
    }

    public function destroy ($id) {
        $contacto = contacto::find($id);
        $contacto->delete();

        flash('Se ha eliminado el atributo contacto ' .$contacto->nombre)->error()->important();
        return redirect()->route('contacto.index');
    }
}
