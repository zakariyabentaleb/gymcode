<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Trainer;

class TrainerWelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $trainer;
    // public $password;

    public function __construct(Trainer $trainer)
    {
        $this->trainer = $trainer;
      
    }

    public function build()
    {
        return $this->subject('Bienvenue sur GymTracker')
                    ->view('emails.trainer_welcome');
    }
}
