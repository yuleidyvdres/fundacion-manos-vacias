<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cancer;
use App\contacto;
use App\donacion;
use App\nino;
use App\User;
use App\ninocontacto;
use Illuminate\Support\Facades\Auth;

class NinoController extends Controller
{
      public function index(Request $request)
    {
      $nino=nino::all();
      return view('Nino.Ninos')->with('title', 'Perfil Niños')
                ->with('nino',$nino->where("users_id",Auth::user()->id));
    }

     public function donacion_publica()
    {
       $nino=nino::orderBy('id','ASC')->paginate(6);  
       $nino->each(function($nino){
            $nino->user;
       });
       return view('Donacion')->with('title', 'Donaciones')->with('nino', $nino);
    }
    public function perfil_publico(Request $request)
    {
       $nino=nino::find($request->get('id'));  
       return view('Nino.Donar-perfil-niño')->with('title', 'Perfil-Público')->with('nino', $nino);;
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
      $nino=nino::find($request->get('id'));
      return view('Nino.cancer-nino')->with('title', 'Perfil Niños')
            ->with('cancer',$cancer)
            ->with('partida',$request->get('id'))
            ->with('var',$request->get('var'))
            ->with('nacimiento',$nino->fecha_nacimiento);

    }
     public function create_contacto(Request $request)
    {
      $contacto=contacto::orderBY('nombre','ASC')->pluck('nombre','id')->diff(["Estado","Municipio"]);
      return view('Nino.contacto-nino')->with('title', 'Perfil Niños')
            ->with('contacto',$contacto)
            ->with('partida',$request->get('id'))
            ->with('var',$request->get('var'));

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
        $nino->users_id=Auth::user()->id;
        //$nino->users_id=24356108;
        $nino->save();
        $nino= nino::find($request->norpartida);
        //--------------- Datos de contacto 
        $nino->contactos()->attach(3, ['valor' => $request->Estado]);
        $nino->contactos()->attach(4, ['valor' => $request->Parroquia]);
        
        flash('Se ha registrade '. $nino->nombre . ' de forma exitosa')->success()->important();
        return redirect()->route('Niño.create_cancer',['id' => $request->norpartida, 'var'=>'nuevo']);
    }

    public function store_cancer(Request $request)
    {
        $nino= nino::find($request->partida);
        $cancer=cancer::find($request->Tipo_cancer);
        //-------------- Tipo Cancer 
        $nino->cancers()->attach($request->Tipo_cancer, ['fecha_deteccion' => $request->Fecha_inicio_cancer]);

        flash('Se ha registrade '. $cancer->nombre . ' de forma exitosa')->success()->important();
        return redirect()->route('Niño.create_cancer',['id' => $request->partida, 'var'=>$request->solicitud]);
     

    }
    public function store_contacto(Request $request)
    {
         $nino= nino::find($request->partida);
         $contacto=contacto::find($request->Tipo_contacto);
         $nino->contactos()->attach($request->Tipo_contacto, ['valor' =>$request->valor_cont]);
         flash('Se ha registrade '. $contacto->nombre. ' de forma exitosa')->success()->important();
        return redirect()->route('Niño.create_contacto',['id' => $request->partida, 'var'=>$request->solicitud]);
        
    }
    public function store_donacion(Request $request)
    {
        $nino= nino::find($request->partida);
        $donacion=donacion::find($request->Donacion);
        //-------------- Donaciones
         $nino->donaciones()->attach($request->Donacion, ['status' => 'No-recibido', 'urgencia' => $request->Urgencia,'descripcion'=>$request->DP, 'cantidad'=>$request->cantidad]);

        flash('Se ha registrade '. $donacion->nombre. ' de forma exitosa')->success()->important();
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
    public function edit(Request $request)
    {
        $nino=nino::find($request->get('id'));
        return view('Nino.template.Perfil-niño.editar-insumo')->with('title', 'Editar Insumo')
            ->with('id',$request->get('id'))
            ->with('donacion',$request->get('donacion'))
            ->with('urgencia',$request->get('urgencia'))
            ->with('don',$request->get('don'))
            ->with('can',$request->get('can'));
    }
     public function edit_cancer( Request $request)
    {
        $nino=nino::find($request->get('id'));
        foreach ($nino->cancers as $key) {
            if ($key->id==$request->get('can')) {
                $key->pivot->activar=$request->get('act');
                $key->pivot->save();
            }
        }
        return redirect()->route('Niño.index');    
    }
     public function edit_localizar( Request $request)
    {
        $nino=nino::find($request->get('id'));

        foreach ($nino->contactos as $key) {
            if ($key->nombre=='Estado') {
                $key->pivot->valor=$request->get('Estado');
                $key->pivot->save();
            }
            if ($key->nombre=='Municipio') {
                $key->pivot->valor=$request->get('Municipio');
                $key->pivot->save();
            }    
        }
        return redirect()->route('Niño.index');

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
    public function update_donacion(Request $request)
    {
        $nino=nino::find($request->id);
          foreach ($nino->donaciones as $key) {
            if ($key->pivot->id==$request->don) {
                $key->pivot->status=$request->Status;
                $key->pivot->urgencia=$request->Urgencia;
                $key->pivot->comentario=$request->comentario;
                $key->pivot->cantidad=$request->cantidad;
                $key->pivot->save();
            }   
        }
        return redirect()->route('Niño.index');
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
    public function destroy_contacto(Request $request) //->delete();  ->detach();
    {
       $key=ninocontacto::find($request->get('id'));
       $key->delete();
               
        flash('Se ha eliminado el contacto de forma exitosa')->error()->important();
        return redirect()->route('Niño.index');
    }
}
