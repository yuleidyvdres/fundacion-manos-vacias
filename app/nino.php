<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
     public function scopeNombre($query, $nombre){
        if (trim($nombre)!="") {
            $query->where("nombre","LIKE","%$nombre%");
        }       
    }
}
