<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cancer;
use Laracasts\Flash\Flash;
use App\Events\UserEvent;
use App\User;

class CancerController extends Controller
{
     public function index(Request $request)
    {
        $cancer=cancer::nombre($request->get('nombre'))->orderBy('id','ASC')->paginate(10);
        if($cancer->count() > 0) {
            return view ('admin.cancer.listar')->with('cancer', $cancer);
        }
        else {
            flash('No se encontraron coincidencias ')->error()->important();
            return redirect()->route('cancer.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cancer.agregar')->with('title', 'Tipo de Cáncer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $cancer= new cancer();
        $cancer->nombre=ucfirst(trans($request->cancer));
        $cancer->save();
        $user = new User();
        
        event(new UserEvent($user, 'Agregar tipo cáncer'));
        flash('Se ha registrado '. $cancer->nombre . ' de forma exitosa')->success()->important();
        return redirect()->route('cancer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cancer= cancer::find($id);
         $cancer->delete();
         $user = new User();
         
         event(new UserEvent($user, 'Eliminar tipo cáncer'));
        flash('Se ha eliminado '. $cancer->nombre . ' de forma exitosa')->error()->important();
        return redirect()->route('cancer.index');
    }
}
