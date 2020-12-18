<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class SupportSubmited
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private $support;

    /**
     * Create a new event instance.
     *
     * @param \App\Models\Support $support
     */
    public function __construct(\App\Models\Support $support)
    {
        Log::notice("support Submitted", [$support->affiliate_id]);

        //
        $this->support = $support;
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
