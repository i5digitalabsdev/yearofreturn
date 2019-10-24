<?php

namespace App\Listeners;

use App\Events\ApplicationSent;
use App\Mail\ApplicationReceived;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class ReceivedApplication
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
     * @param  ApplicationSent  $event
     * @return void
     */
    public function handle(ApplicationSent $event)
    {
        Mail::to($event->appData['email'])->send(new ApplicationReceived($event->appData));
    }
}
