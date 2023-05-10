<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SignatureNotificaton extends Notification
{
    use Queueable;
    public $loan_number,$loan_applicant_name;
    protected $footer = 'Sincerely<br>, ELIANA CASHXPRESS<br>Customer Care Department';
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($loan_number,$loan_applicant_name)
    {
        $this->loan_number = $loan_number;
        $this->loan_applicant_name = $loan_applicant_name;
        //
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
                    ->greeting('Loan Verification')
                    ->line('Hi '.$this->loan_applicant_name.' Hi and thank you for registering on our website by making your first loan application')
                    ->line('Please submit your E-SIGNATURE for us to start processing your Loan. Click on the link below to submit the E-SIGNATURE')
                    ->action('E-SIGNATURE', url('/signature'))
                    ->line('Your Loan number is '.$this->loan_number. ' Keep it secure.')
                    ->line('We are pleased that you have chosen ELIANA CASHXPRESS &#128512;');
                    ->line($this->footer);
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
