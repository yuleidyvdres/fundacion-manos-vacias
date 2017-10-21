<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donacion extends Model
{
    protected $table ="donaciones";

    protected $fillable= ['nombre', 'tipo'];

    public function ninos(){
        return $this->belongsToMany('App\nino','nino-donacion','donaciones_id','nino_id')
                                    ->withPivot('id','status','urgencia','descripcion','comentario','cantidad')
                                    ->withTimestamps();
    }

    public function scopeNombre($query, $nombre){
    	if (trim($nombre)!="") {
    		$query->where("nombre","LIKE","%$nombre%");
    	}	
    }
}
