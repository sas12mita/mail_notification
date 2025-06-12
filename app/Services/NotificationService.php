<?php

namespace App\Services;

use App\Mail\FormSubmitted;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class NotificationService
{
    /**
     * Send notification emails to the user and the admin
     *
     * @param User $user The user who submitted the form
     * @param string $type The type of form submitted (e.g. "Bank Account", "Broker Account")
     * @return void
     */
    public static function sendFormSubmissionMail(User $user, string $type, $message): void
    {
        Mail::to($user->email)->send(new FormSubmitted($user, $type,$message));
    }
}
