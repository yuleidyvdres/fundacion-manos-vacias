<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contacto extends Model
{
    protected $table ="contactos";

    protected $fillable= ['nombre'];

    public function ninos(){
        return $this->belongsToMany('App\nino','nino-contacto','contacto_id','nino_id')
                                    ->withPivot('valor')
                                    ->withTimestamps();
    }

    public function scopeNombre($query, $nombre){
    	if (trim($nombre)!="") {
    		$query->where("nombre","LIKE","%$nombre%");
    	}		
    }
}
