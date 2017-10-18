<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $user_mail;
    public $action;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $user, string $action)
    {
        if(Auth::check()) {
            $this->user_mail = Auth::user()->email;
        }
        else {
            $this->user_mail = $user->email;
        } 

        $this->action = $action;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
