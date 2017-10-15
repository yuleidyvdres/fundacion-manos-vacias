<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donacion extends Model
{
     protected $table ="ninos";

    protected $fillable= ['nombre', 'tipo'];

    public function ninos(){
        return $this->belongsToMany('App\nino')->withTimestamps();
    }
}
