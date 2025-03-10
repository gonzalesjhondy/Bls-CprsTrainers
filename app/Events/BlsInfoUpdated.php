<?php

namespace App\Events;

use App\Models\blsinfo;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Queue\SerializesModels;

class BlsInfoUpdated implements ShouldBroadcast
{
    use InteractsWithSockets, SerializesModels;

    public $blsinfo;

    public function __construct(blsinfo $blsinfo)
    {
        $this->blsinfo = $blsinfo;
    }

    public function broadcastOn()
    {
        return new Channel('blsinfo-updates');
    }

    public function broadcastWith()
    {
        return ['blsinfo' => $this->blsinfo];
    }
}

