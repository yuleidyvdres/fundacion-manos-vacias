<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bitacora extends Model
{
    protected $table ="bitacoras";

    protected $fillable= ['email','ip','fecha','accion'];
}
