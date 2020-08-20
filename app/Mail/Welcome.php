<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Welcome extends Mailable
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
    // $user = auth()->user();
    return $this->from('admin@hoteru.me')->markdown('emails.welcome')->with([

            'username'    =>  $this->user['username'],
            'email'       =>  $this->user['email'],
            'password'    =>  $this->pwd,

            ]);
  }


}
