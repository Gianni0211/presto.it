<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RevisorMail extends Mailable
{
    use Queueable, SerializesModels;
   


    public $contact;
    public $message;     
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact,$message)
    {
        $this->contact=$contact;
       
        
        $this->contact->message=$message;
    }

    /**
     * Build the message.
     * @return $this
     */
    public function build()
    {
        //dd($message);
       
        return $this->from('info@subito.it')->
        view('revisor.mail');
    }
}
