<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class WelcomeEmailNotification extends Notification
{
    use Queueable;

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Welcome to Activity 9!')
            ->greeting('Hello, ' . $notifiable->name . '!')
            ->line('Thank you for registering on our platform.')
            ->line('You can now access your dashboard and explore our features.')
            ->action('Go to Dashboard', url('/dashboard'))
            ->line('If you did not register, please contact support.');
    }
}