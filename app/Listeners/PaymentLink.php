<?php

namespace App\Listeners;

use App\Events\PaymentLinkSent;
use App\Mail\SendPaymentLinkToApplicant;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class PaymentLink
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
     * @param  PaymentLinkSent  $event
     * @return void
     */
    public function handle(PaymentLinkSent $event)
    {
        Mail::to($event->data['email'])->send(new SendPaymentLinkToApplicant($event->data));
    }
}
