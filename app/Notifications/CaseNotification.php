<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\SlackMessage;
use Illuminate\Notifications\Notification;

class CaseNotification extends Notification
{
    use Queueable;

    public $case;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($case)
    {
        $this->case = $case;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['slack'];
    }

    public function toSlack($notifiable)
    {
        return (new SlackMessage)
            ->from('FWAbot', ':robot_face:')
            ->to(config('fwa.channel'))
            ->content('👉 '.$this->case['title'] .' is on position '.$this->case['rank'] .' with '. $this->case['points'].' points ('.$this->case['voteCount'].' votes) 🔥 👉 https://thefwa.com/live-judging/');
    }
}
