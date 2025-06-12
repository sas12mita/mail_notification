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
    public $message;

    public function __construct(User $user, string $type, $message)
    {
        $this->user = $user;
        $this->type = $type;
        $this->message=$message
    }

    public function build()
    {
        $subject = $this->isAdmin
            ? "New {$this->type} Submission by {$this->user->name}"
            : "Your {$this->type} Application Received";

        return $this->subject($subject)
                    ->view('emails.form_submitted');
    }
}
