<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ninocontacto extends Model
{
     protected $table ="nino-contacto";

    protected $fillable= ['id', 'valor', 'contacto_id', 'nino_id'];

}
