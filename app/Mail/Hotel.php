<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Hotel extends Mailable
{
    use Queueable, SerializesModels;
    protected $user;
    protected $pwd;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user,$pwd)
    {
      //
      $this->user = $user;
      $this->pwd = $pwd;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('admin@hoteru.me')->markdown('emails.hotel');
    }
}
