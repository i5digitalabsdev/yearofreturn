<?php

namespace App\Listeners;

use App\Events\PartTwoLinkSent;
use App\Mail\SendPartTwoLinkToApplicant;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class PartTwoLink
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
     * @param  PartTwoLinkSent  $event
     * @return void
     */
    public function handle(PartTwoLinkSent $event)
    {
        Mail::to($event->data['email'])->send(new SendPartTwoLinkToApplicant($event->data));
    }
}
