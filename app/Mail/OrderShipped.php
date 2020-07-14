<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;



class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $orden;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($orden)
    {
        $this->orden = $orden;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('sistema@expusure.mx')
                ->view('emails.orders.shipped');

    }
}
