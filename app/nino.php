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
                                    ->withPivot('fecha_deteccion')
                                    ->withTimestamps();
    }

    public function donaciones(){
        return $this->belongsToMany('App\donacion', 'nino-donacion','nino_id','donaciones_id')
                                    ->withPivot('status','urgencia','descripcion','comentario','cantidad')
                                    ->withTimestamps();
    }

    public function contactos(){
        return $this->belongsToMany('App\contacto','nino-contacto','nino_id','contacto_id')
                                    ->withPivot('valor')
                                    ->withTimestamps();
    }

    public function scopeBuscarNino($query, $estado){
    	if (trim($estado)!="") {
            /*dd($estado);*/
            $ninos = nino::join('nino-contacto','ninos.id', '=', 'nino_id') 
                           ->where('valor', 'like', "%".$estado."%");
    
            return $ninos;
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
