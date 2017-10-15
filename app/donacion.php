<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donacion extends Model
{
    protected $table ="donaciones";

    protected $fillable= ['nombre', 'tipo'];

    public function ninos(){
        return $this->belongsToMany('App\nino','nino-donacion','donaciones_id','nino_id')
                                    ->withPivot('status','urgencia','descripcion','comentario')
                                    ->withTimestamps();
    }
}
