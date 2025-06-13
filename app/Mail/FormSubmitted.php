<?php
namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class FormSubmitted extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $user;
    public $type;
    public $mail_message;

    public function __construct(User $user, string $type, $mail_message)
    {
        $this->user = $user;
        $this->type = $type;
        $this->mail_message= $mail_message;
    }

    public function build()
    {
    
        return $this->subject("Form Submission : {$this->type}")
                    ->view('email')->with([
                        'user'=>$this->user,
                        'type'=>$this->type,
                        'mail_message'=>$this->mail_message,
                    ]);
    }
}
