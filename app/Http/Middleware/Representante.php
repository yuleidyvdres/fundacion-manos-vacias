<?php

namespace App\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;

use Closure;

class Representante
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    protected $auth;
     
    public function __construct (Guard $auth) {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next)
    {
        if($this->auth->user()->isRepresentante()) {
            return $next($request);
        }
        else {
            if($this->auth->user()->tipoUsuario()){
                return redirect()->route('donaciones.index');
            }
        }
    } 
}
