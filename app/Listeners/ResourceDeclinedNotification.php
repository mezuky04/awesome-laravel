<?php

namespace App\Listeners;

use App\Events\ResourceDeclined;
use App\User;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

/**
 * Notify user when resource request is declined.
 *
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class ResourceDeclinedNotification {

    /**
     * Create the event listener.
     *
     */
    public function __construct() {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ResourceDeclined  $event
     * @return void
     */
    public function handle(ResourceDeclined $event) {
        Mail::queue('email.resource-notification', ['resource' => $event->resource, 'declined' => true], function($message) use ($event) {
            $message->from('notifications@awesome-laravel.com', 'Awesome Laravel');
            $message->to(User::where('id', $event->resource->user_id)->first()->email)->subject('Your resource was declined');
        });
    }
}
