<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\donacion;

class DonacionesController extends Controller
{
    public function create () {
        return view('admin.donaciones.agregar')->with('title', 'Agregar Donación');
    }

    public function store (Request $request) {
        $donacion = new donacion($request->all());
        $donacion->save();

        flash('La donación '. $donacion->nombre .' se ha agregado de manera exitosa')->success()->important();
        return redirect()->route('donaciones.index');

    }

    public function index () {
        $donaciones = donacion::orderBy('id', 'ASC')->paginate(10);
        return view ('admin.donaciones.listar')->with('donaciones', $donaciones);
    }

    public function destroy ($id) {
        $donacion = donacion::find($id);
        $donacion->delete();

        flash('Se ha eliminado '. $donacion->nombre)->error()->important();
        return redirect()->route('donaciones.index');
    }
}
