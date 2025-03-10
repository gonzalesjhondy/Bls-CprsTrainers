<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ProfWorkEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $action;
    public $profWork;

    public function __construct($action, $profWork)
    {
        $this->action = $action;
        $this->profWork = $profWork;
    }

    public function broadcastOn()
    {
        return new Channel('profwork-channel');
    }

    public function broadcastAs()
    {
        return 'profwork.updated';
    }

    public function broadcastWith()
    {
        return [
            'action' => $this->action,
            'profWork' => [
                'id' => $this->profWork->id,
                'ProfWorkDesc' => $this->profWork->ProfWorkDesc,
                'created_at' => $this->profWork->created_at,
                'updated_at' => $this->profWork->updated_at
            ]
        ];
    }
}