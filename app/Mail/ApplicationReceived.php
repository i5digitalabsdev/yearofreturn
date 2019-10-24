<?php

namespace App\Mail;

use App\Helpers\Settings;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ApplicationReceived extends Mailable
{
    use Queueable, SerializesModels;
    public $appData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($appData)
    {
        $this->appData = $appData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = $this->appData['body']['subject'];
        return $this->view('emails.applicationReceived')->subject($subject);
    }
}
