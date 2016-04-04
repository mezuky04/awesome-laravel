<?php

namespace App\Listeners;

use App\Events\ResourceApproved;
use App\User;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

/**
 * Send notification when resource is approved.
 *
 * @author  Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class ResourceApprovedNotification {

    /**
     * Create the event listener.
     */
    public function __construct() {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ResourceApproved  $event
     * @return void
     */
    public function handle(ResourceApproved $event) {
        Mail::queue('email.resource-notification', ['resource' => $event->resource], function($message) use($event) {
            $message->from('notifications@awesome-laravel.com', 'Awesome Laravel');
            $message->to(User::where('id', $event->resource->user_id)->first()->email)->subject('Your resource was accepted!');
        });
    }
}
