<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class SendMail extends Event
{
    use SerializesModels;


    public $result;

    public function __construct($result)
    {
        $this->result = $result;
    }


    public function broadcastOn()
    {
        return [];
    }
}
