<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contacto extends Model
{
     protected $table ="ninos";

    protected $fillable= ['nombre'];

    public function ninos(){
        return $this->belongsToMany('App\nino')->withTimestamps();
    }
}
