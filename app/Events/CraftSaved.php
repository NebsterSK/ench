<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Craft;

class CraftSaved {
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $objCraft;

    public function __construct(Craft $objCraft) {
        $this->objCraft = $objCraft;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
//    public function broadcastOn() {
//        return new PrivateChannel('channel-name');
//    }
}
