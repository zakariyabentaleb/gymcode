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
    public $plainPassword;
    
    public function __construct($trainer, $plainPassword)
{
    $this->trainer = $trainer;
    $this->plainPassword = $plainPassword;
}

    public function build()
    {
        return $this->subject('Bienvenue sur GymTracker')
                    ->view('emails.trainer_welcome');
    }
}
