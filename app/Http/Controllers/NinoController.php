<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cancer;
use App\contacto;
use App\donacion;
use App\nino;

class NinoController extends Controller
{
      public function index()
    {
      return view('Nino.Ninos')->with('title', 'Perfil Niños');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $cancer=cancer::orderBY('nombre','ASC')->pluck('nombre','id');
      $contacto=contacto::orderBY('nombre','ASC')->pluck('nombre','id')->diff(["Estado","Municipio"]);
      $donacion=donacion::orderBY('nombre','ASC')->pluck('nombre','id');

      return view('Nino.nuevo-niño')->with('title', 'Perfil Niños')
      		->with('cancer',$cancer)
      		->with('contacto',$contacto)
      		->with('donacion',$donacion);
    }

    public function create_cancer(Request $request)
    {
      $cancer=cancer::orderBY('nombre','ASC')->pluck('nombre','id');
      return view('Nino.cancer-nino')->with('title', 'Perfil Niños')
            ->with('cancer',$cancer)
            ->with('partida',$request->get('id'));

    }
     public function create_contacto(Request $request)
    {
      $contacto=contacto::orderBY('nombre','ASC')->pluck('nombre','id')->diff(["Estado","Municipio"]);
      return view('Nino.contacto-nino')->with('title', 'Perfil Niños')
            ->with('contacto',$contacto)
            ->with('partida',$request->get('id'));

    }
     public function create_donacion(Request $request)
    {
      $donacion=donacion::orderBY('nombre','ASC')->pluck('nombre','id');
      return view('Nino.donacion-nino')->with('title', 'Perfil Niños')
            ->with('donacion',$donacion)
            ->with('partida',$request->get('id'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nino= new nino();
        //---------------- Datos Generales
        $nino->id=$request->norpartida;
        $nino->nombre=$request->nombre;
        $nino->apellido=$request->apellido;
        $nino->fecha_nacimiento=$request->Fecha_nac;
        $nino->genero=$request->Sexo;
        $nino->situacion_actual=$request->SA;
        //$nino->users_id=/Auth::user()->id;
        $nino->users_id=24356108;
        $nino->save();
        $nino= nino::find($request->norpartida);
        //--------------- Datos de contacto 
        $nino->contactos()->attach(3, ['valor' => $request->Estado]);
        $nino->contactos()->attach(4, ['valor' => $request->Parroquia]);
        
        flash('Se ha registrade '. $nino->nombre . ' de forma exitosa')->success()->important();
        return redirect()->route('Niño.create_cancer',['id' => $request->norpartida]);
    }

    public function store_cancer(Request $request)
    {
        $nino= nino::find($request->partida);
        //-------------- Tipo Cancer 
        $nino->cancers()->attach($request->Tipo_cancer, ['fecha_deteccion' => $request->Fecha_inicio_cancer]);

        flash('Se ha registrade '. $request->Tipo_cancer. ' de forma exitosa')->success()->important();
        return redirect()->route('Niño.create_cancer',['id' => $request->partida]);
     

    }
    public function store_contacto(Request $request)
    {
         $nino= nino::find($request->partida);
         $nino->contactos()->attach($request->Tipo_contacto, ['valor' =>$request->valor_cont]);
         flash('Se ha registrade '. $request->Tipo_contacto. ' de forma exitosa')->success()->important();
        return redirect()->route('Niño.create_contacto',['id' => $request->partida]);
        
    }
    public function store_donacion(Request $request)
    {
        $nino= nino::find($request->partida);
        //-------------- Donaciones
         $nino->donaciones()->attach($request->Donacion, ['status' => 'No-recibido', 'urgencia' => $request->Urgencia,'descripcion'=>$request->DP, 'cantidad'=>$request->cantidad]);

        flash('Se ha registrade '. $request->Donacion. ' de forma exitosa')->success()->important();
        return redirect()->route('Niño.create_donacion',['id' => $request->partida]);
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
       
    }
}
