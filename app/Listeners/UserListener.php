<?php

namespace App\Listeners;

use App\Events\UserEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Carbon\Carbon;
use App\bitacora;

class UserListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserEvent  $event
     * @return void
     */
    public function handle(UserEvent $event)
    {
        $log = new bitacora();
        $log->email = $event->user_mail;
        $log->ip = \Request::ip();
        $log->accion = $event->action;
        $log->fecha = Carbon::now('America/Caracas')->toDateTimeString();
        $log->save();
        
    }
}
