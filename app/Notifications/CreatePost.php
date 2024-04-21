<?php

namespace App\Notifications;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CreatePost extends Notification
{
    use Queueable;
    private $Post_id;
    private $User_Create;
    private $title;
    public function __construct($Post_id,  $User_Create, $title){
        $this->Post_id = $Post_id;
        $this->$User_Create = $User_Create;
        $this->title = $title;
    }

    public function via(object $notifiable): array
    {
        return ['database'];
    }
    public function toArray(object $notifiable): array
    {
        return [
            'Post_id' => $this->Post_id,
            'User_Create' => $this->User_Create,
            'title' => $this->title
        ];
    }
}
