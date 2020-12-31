<?php

namespace App\maguttiCms\Notifications;

use App\Newsletter;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewsletterSubscriberUserNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public $data;

    /**
     * Create a new notification instance.
     *
     * @param Newsletter $data
     */
    public function __construct(Newsletter $data)
    {
        //
        $this->data = $data;
        $this->delay(now()->addMinute(1));
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {

        return (new MailMessage)
            ->subject(trans('website.mail_message.subscribe_newsletter_subject').' - '.config('maguttiCms.website.option.app.name'))
            ->greeting(trans('website.mail_message.greeting'))
            ->line(trans('website.mail_message.subscribe_newsletter_feedback'))
            ->line('')
            ->salutation(trans('website.mail_message.firm'));
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
