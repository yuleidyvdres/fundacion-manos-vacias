<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\UserEvent;
use App\cancer;
use App\contacto;
use App\donacion;
use App\nino;
use App\User;
use App\ninocontacto;
//use Illuminate\Support\Facades\Auth;

class NinoController extends Controller
{
      public function index(Request $request)
    {
      $nino=nino::all();
      $act=false;
      return view('Nino.Ninos')->with('title', 'Perfil Niños')
                ->with('act', $act)
                ->with('nino',$nino->where("users_id",Auth::user()->id));
    }

     public function donacion_publica()
    {
       $nino=nino::orderBy('id','ASC')->paginate(6);  
       $nino->each(function($nino){
            $nino->user;
       });

       return view('Donacion')->with('title', 'Donaciones')->with('nino', $nino)->with('edad', null);
       //return view('Donacion')->with('title', 'Donaciones')->with('nino', $nino);

    }
    public function perfil_publico(Request $request)
    {
       $nino=nino::find($request->get('id'));  
       $dona = new donacion();
       $act = false;
       /*return view('Nino.Donar-perfil-niño')->with('title', 'Perfil-Público')->with('nino', $nino);*/
       return view('Nino.Donar-perfil-niño')->with('title', 'Perfil-Público')->with('nino', $nino)->with('dona', $dona)->with('act', $act); 
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
      $cancer=cancer::orderBY('nombre','ASC')->where('active',1)->pluck('nombre','id');
      $nino=nino::find($request->get('id'));
      $var=0;
      $aux[0]="hola amigos";
      foreach ($nino->cancers as $key) {
          $aux[$var]=$key->nombre;
          $var++;
      }
      $can=$cancer->diff($aux);

      return view('Nino.cancer-nino')->with('title', 'Perfil Niños')
            ->with('cancer',$can)
            ->with('partida',$request->get('id'))
            ->with('var',$request->get('var')) //rebisar 
            ->with('nacimiento',$nino->fecha_nacimiento);

    }
     public function create_contacto(Request $request)
    {
      $contacto=contacto::orderBY('nombre','ASC')->where('active',1)->pluck('nombre','id')->diff(["Estado","Municipio"]);
      return view('Nino.contacto-nino')->with('title', 'Perfil Niños')
            ->with('contacto',$contacto)
            ->with('partida',$request->get('id'))
            ->with('var',$request->get('var'));

    }
     public function create_donacion(Request $request)
    {
      $donacion=donacion::orderBY('nombre','ASC')->where('active',1)->pluck('nombre','id');
      $nino=nino::find($request->get('id'));
      $var=0;
      $aux[0]="hola amigos";
      foreach ($nino->donaciones as $key) {
        if ($key->pivot->status=='No-recibido') {
           $aux[$var]=$key->nombre;
           $var++;
        }   
      }
      $don=$donacion->diff($aux);

      return view('Nino.donacion-nino')->with('title', 'Perfil Niños')
            ->with('donacion',$don)
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
        $confirm = nino::find($request->norpartida);
        if(!$confirm) {
          //---------------- Datos Generales
          $nino->id=$request->norpartida;
          $nino->nombre=$request->nombre;
          $nino->apellido=$request->apellido;
          $nino->fecha_nacimiento=$request->Fecha_nac;
          $nino->genero=$request->Sexo;
          $nino->situacion_actual=$request->SA;
          $nino->users_id=Auth::user()->id;
          //$nino->users_id=24356108;
          /*Bitácora*/
          $usuario = Auth::user();
          event(new UserEvent($usuario, 'Agregar niño'));
          //-------------------------------------------
          $nino->save();
          $nino= nino::find($request->norpartida);
          //--------------- Datos de contacto 
          $nino->contactos()->attach(3, ['valor' => $request->Estado]);
          $nino->contactos()->attach(4, ['valor' => $request->Parroquia]);
          
          flash('Se ha registrado '. $nino->nombre . ' de forma exitosa')->success()->important();
          return redirect()->route('Niño.create_cancer',['id' => $request->norpartida, 'var'=>'nuevo']);
        }else{
          flash('El niño '. $request->norpartida . ' ya existe')->success()->important();
          return redirect()->route('Niño.create');
        }
    }

    public function store_cancer(Request $request)
    {
        $nino= nino::find($request->partida);
        $cancer=cancer::find($request->Tipo_cancer);
        //-------------- Tipo Cancer 
        $nino->cancers()->attach($request->Tipo_cancer, ['fecha_deteccion' => $request->Fecha_inicio_cancer]);


        /*Bitácora*/
        $usuario = Auth::user();
        event(new UserEvent($usuario, 'Agregar nino_cancer'));
        flash('Se ha registrade '. $cancer->nombre . ' de forma exitosa')->success()->important();
        return redirect()->route('Niño.create_cancer',['id' => $request->partida, 'var'=>$request->solicitud]);

     

    }
    public function store_contacto(Request $request)
    {
         $nino= nino::find($request->partida);
         $contacto=contacto::find($request->Tipo_contacto);
         $nino->contactos()->attach($request->Tipo_contacto, ['valor' =>$request->valor_cont]);

        /*Bitácora*/
        $usuario = Auth::user();
        event(new UserEvent($usuario, 'Agregar niño_contacto'));

         flash('Se ha registrade '. $contacto->nombre. ' de forma exitosa')->success()->important();
        return redirect()->route('Niño.create_contacto',['id' => $request->partida, 'var'=>$request->solicitud]);
        
    }
    public function store_donacion(Request $request)
    {
        $nino= nino::find($request->partida);
        $donacion=donacion::find($request->Donacion);
        
        /****Validar si el niño ya tiene la donación, ésta ya haya sido recibida****/
        $nino_donacion = nino::join('nino-donacion', 'ninos.id', '=', 'nino_id')
                               ->where('nino_id', '=', $request->partida)->get();

        $band = true;

        if($nino_donacion) {
            foreach($nino_donacion as $nin){
                if($nin->status == 'No-recibido' && $nin->donaciones_id == $request->Donacion) {
                    $band = false;
                    break;
                }
            }
            if($band) {
                //-------------- Donaciones
                $nino->donaciones()->attach($request->Donacion, ['status' => 'No-recibido', 'urgencia' => $request->Urgencia,'descripcion'=>$request->DP, 'cantidad'=>$request->cantidad]);
        
                /*Bitácora*/
                $usuario = Auth::user();
                event(new UserEvent($usuario, 'Agregar niño_donacion'));
        
                flash('Se ha registrado '. $donacion->nombre. ' de forma exitosa')->success()->important();
                return redirect()->route('Niño.create_donacion',['id' => $request->partida]);
            }
            else {
                flash('La donación '. $donacion->nombre. ' ya se encuentra registrada y con status "No recibido"')->error()->important();
                return redirect()->route('Niño.create_donacion',['id' => $request->partida]);
            }
        }
        else {
            //-------------- Donaciones
            $nino->donaciones()->attach($request->Donacion, ['status' => 'No-recibido', 'urgencia' => $request->Urgencia,'descripcion'=>$request->DP, 'cantidad'=>$request->cantidad]);
            
            /*Bitácora*/
            $usuario = Auth::user();
            event(new UserEvent($usuario, 'Agregar niño_donacion'));
    
            flash('Se ha registrado '. $donacion->nombre. ' de forma exitosa')->success()->important();
            return redirect()->route('Niño.create_donacion',['id' => $request->partida]);
        }
        
    }

    public function search (Request $request) {
        $ninos = nino::BuscarNino($request->estado, $request->edad)->paginate(6);
        return view('Donacion')->with('title', 'Donaciones')
                               ->with('nino', $ninos)
                               ->with('edad', $request->edad);
    }

    public function buscarDonacion (Request $request) {
        
        if($request->nombre == null) {
            return redirect()->route('Niño.perfil_publico',['id' => $request->id]);
        }
        else {
            $nino = nino::find($request->id);
            $act = false;
            $dona = donacion::join('nino-donacion', 'donaciones_id', '=', 'donaciones.id')
                        ->join('ninos', 'ninos.id', '=', 'nino-donacion.nino_id')
                        ->select('donaciones.nombre as don_nom','donaciones.tipo','nino-donacion.urgencia', 'nino-donacion.descripcion', 'nino-donacion.status', 'nino-donacion.comentario','nino-donacion.nino_id')
                        ->where('donaciones.nombre', 'LIKE', "%".$request->nombre."%")
                        ->where('nino-donacion.nino_id','=',$request->id)
                        ->get();
            if($dona) {
                $act = true;
            }
            return view('Nino.Donar-perfil-niño')->with('title', 'Perfil-Público')->with('nino', $nino)->with('dona', $dona)->with('act', $act); 
        }
    }

     public function buscarD(Request $request) {
        
        if($request->nombre == null) {
            return redirect()->route('Niño.index');
        }
        else {
            $nino = nino::all();
            $nino1 = nino::find($request->id);
            $act = false;
            $dona = donacion::join('nino-donacion', 'donaciones_id', '=', 'donaciones.id')
                        ->join('ninos', 'ninos.id', '=', 'nino-donacion.nino_id')
                        ->select('donaciones.nombre as don_nom','donaciones.tipo','nino-donacion.urgencia', 'nino-donacion.descripcion', 'nino-donacion.status', 'nino-donacion.comentario','nino-donacion.nino_id','nino-donacion.cantidad','nino-donacion.id')
                        ->where('donaciones.nombre', 'LIKE', "%".$request->nombre."%")
                        ->where('nino-donacion.nino_id','=',$request->id)
                        ->get();
                       // dd($dona);
            if($dona) {
                $act = true;
            }
            return view('Nino.Ninos')->with('title', 'Perfil-Niño')
                      ->with('nino', $nino)
                      ->with('dona', $dona)
                      ->with('act', $act); 
        }
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

     public function edit_situacion( Request $request)
    {
        $nino=nino::find($request->get('id'));
        $nino->situacion_actual=$request->get('SA');
        $nino->save();
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
                $key->pivot->urgencia=$request->Urgencia;
                $key->pivot->comentario=$request->comentario;
                $key->pivot->cantidad=$request->cantidad;
                if ($request->cantidad==0) {
                  $key->pivot->status='Recibido';
                }else{
                  $key->pivot->status='No-recibido';
                }
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
