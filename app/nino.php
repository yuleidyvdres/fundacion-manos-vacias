<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class nino extends Model
{
    protected $table ="ninos";

    protected $fillable= ['id', 'nombre', 'apellido', 'genero', 'fecha_nacimiento', 'situacion_actual', 'users_id'];

    public function user(){
        return $this->belongsTo('App\User');
    }

     public function cancers(){
        return $this->belongsToMany('App\cancer','nino-cancer','nino_id','cancer_id')
                                    ->withPivot('fecha_deteccion','activar')
                                    ->withTimestamps();
    }

    public function donaciones(){
        return $this->belongsToMany('App\donacion', 'nino-donacion','nino_id','donaciones_id')
                                    ->withPivot('id','status','urgencia','descripcion','comentario','cantidad')
                                    ->withTimestamps();
    }

    public function contactos(){
        return $this->belongsToMany('App\contacto','nino-contacto','nino_id','contacto_id')
                                    ->withPivot('id','valor')
                                    ->withTimestamps();
    }


    public function scopeBuscarNino($query, $request){
        if (trim($request->estado)!="seleccionar" && $request->cancer==null) {
            $ninos = nino::whereHas('contactos', function($q) use($request){
                $q->where('valor', 'LIKE', "%".$request->estado."%");
            });
            return $ninos;
        }
        else{
            if($request->cancer!=null && trim($request->estado!="seleccionar")){
                $ninos = nino::whereHas('contactos', function($query) use($request){
                    $query->where('valor', 'LIKE', '%'.$request->estado.'%');
                })->whereHas('cancers', function($query) use($request){
                    $query->where('nombre', 'LIKE', '%'.$request->cancer.'%');
                });
                return $ninos;
            }
            else {
                if($request->cancer!=null){
                    $ninos = nino::whereHas('cancers', function($q) use($request){
                        $q->where('nombre', 'LIKE', "%".$request->cancer."%");
                    });
                    return $ninos;
                }
                else {
                    if($request->edad!=null){
                        $ninos = nino::select('*');   
                        return $ninos;
                    }
                } 
            }   
        }
    }

    public function edad() {
        $year = Carbon::createFromFormat('Y-m-d', $this->fecha_nacimiento)->year;
        $month = Carbon::createFromFormat('Y-m-d', $this->fecha_nacimiento)->month;
        $day =  Carbon::createFromFormat('Y-m-d', $this->fecha_nacimiento)->day;
        
        $edad = Carbon::createFromDate($year,$month,$day)->age;
        return $edad;   
    }
}