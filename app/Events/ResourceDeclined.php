<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

/**
 * ResourceDeclined event.
 * 
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class ResourceDeclined extends Event {
    
    use SerializesModels;

    /**
     * @var
     */
    public $resource;
    
    /**
     * Create a new event instance.
     *
     * @param $resource
     */
    public function __construct($resource) {
        $this->resource = $resource;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn() {
        return [];
    }
}
