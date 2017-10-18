<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DonacionRequest;
use App\Events\UserEvent;
use App\donacion;
use App\User;

class DonacionesController extends Controller
{

    public function create () {
        return view('admin.donaciones.agregar')->with('title', 'Agregar Donación');
    }

    public function store (DonacionRequest $request) {
        $donacion = new donacion($request->all());
        $donacion->save();
        $user = new User();

        event(new UserEvent($user, 'Agregar donación'));
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
        $user = new User();

        event(new UserEvent($user, 'Eliminar donación'));
        flash('Se ha eliminado '. $donacion->nombre)->error()->important();
        return redirect()->route('donaciones.index');
    }

    public function search (Request $request) {
        $donaciones = donacion::nombre($request->get('nombre'))->orderBy('id', 'ASC')->paginate(10);
        if($donaciones->count() > 0) {
            return view ('admin.donaciones.listar')->with('donaciones', $donaciones);
        }
        else {
            flash('No se encontraron coincidencias ')->error()->important();
            return redirect()->route('donaciones.index');
        }
    }
}
