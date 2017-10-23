<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\nino;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /*$this->middleware('auth');*/
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function urgencias()
    {
        $ninos = nino::all()->shuffle();
        
        return view('homepage')->with('ninos', $ninos);
    }
}
