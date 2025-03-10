<?php

namespace App\Events;

use App\Models\agebracket;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AgeBracketCreated implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $ageBracket;

    public function __construct(agebracket $ageBracket)
    {
        $this->ageBracket = $ageBracket;
    }

    public function broadcastOn()
    {
        return new Channel('ageBrackets');
    }

    public function broadcastWith()
    {
        return [
            'id' => $this->ageBracket->id,
            'AgeBracketDesc' => $this->ageBracket->AgeBracketDesc,
        ];
    }
}