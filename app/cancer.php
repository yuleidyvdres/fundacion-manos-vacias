<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cancer extends Model
{
    protected $table ="cancers";

    protected $fillable= ['nombre'];

     public function ninos(){
        return $this->belongsToMany('App\nino','nino-cancer','cancer_id','nino_id')->withTimestamps()
         							->withPivot('fecha_deteccion')
                                    ->withTimestamps();
    }
}
