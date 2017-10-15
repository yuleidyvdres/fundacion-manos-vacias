<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nino extends Model
{
    protected $table ="ninos";

    protected $fillable= ['partida', 'nombre', 'apellido', 'genero', 'fecha_nacimiento', 'situacion_actual', 'users_ci'];

    public function user(){
        return $this->belongsTo('App\User');
    }

     public function cancers(){
        return $this->belongsToMany('App\cancer');
    }

    public function donaciones(){
        return $this->belongsToMany('App\donacion');
    }

    public function contactos(){
        return $this->belongsToMany('App\contacto');
    }
}
