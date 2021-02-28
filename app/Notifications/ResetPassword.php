<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Auth\Notifications\ResetPassword as Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPassword extends Notification
{
    use Queueable;


    public function toMail($notifiable)
    {

        $url = url(config('app.client_url').'/password/reset/'.$this->token). 
        '?email='.urlencode($notifiable->email);

        return (new MailMessage)
                    ->subject('Сброс пароля')
                    ->line('Вы получили данное письмо, так как запросили сброс пароля для Вашего аккаунта')
                    ->action('Сбросить пароль', $url)
                    ->line('Если от Вас не поступало никаких запросов - то нечего делать не требуется.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
