<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\UserEvent;
use App\Http\Requests\ContactoRequest;
use App\contacto;
use App\User;

class ContactoController extends Controller
{
    public function create () {
        return view('admin.contacto.agregar')->with('title', 'Agregar Donación');
    }

    public function store (ContactoRequest $request) {
        $contacto = new contacto($request->all());
        $contacto->nombre = ucfirst(trans($request->nombre));
        $contacto->save();
        $user = new User();
        
        event(new UserEvent($user, 'Agregar contacto'));
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
        $user = new User();

        event(new UserEvent($user, 'Eliminar contacto'));
        flash('Se ha eliminado el atributo contacto ' .$contacto->nombre)->error()->important();
        return redirect()->route('contacto.index');
    }

    public function search (Request $request) {
        $contacto = contacto::nombre($request->get('nombre'))->orderBy('id', 'ASC')->paginate(10);

        if($contacto->count() > 0)
            return view('admin.contacto.listar')->with('contacto', $contacto);
        else {
            flash('No se encontraron coincidencias ')->error()->important();
            return redirect()->route('contacto.index');
        }
    }
}
