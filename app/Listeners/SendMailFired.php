<?php

namespace App\Listeners;
use Mail;
use App\Events\SendMail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailFired
{

    public function __construct()
    {
        //
    }


    public function handle(SendMail $event)
    {
        $mailarray = $event->result;

            switch ($mailarray['formname']) {

                case "callback":
                    Mail::send('emails.callback', $mailarray, function($message) use ($mailarray) {
                        $message->to('ipopov@steklo-group.ru', 'Илья Попов');
                            if (isset($mailarray['email'])) {
                                $message->from($mailarray['email'], $mailarray['name']);        
                                $message->setCc($mailarray['email'], $mailarray['name']);
                                $message->replyTo($mailarray['email'], $mailarray['name']);
                            }
                            else {
                                $message->from('callback@steklo-group.ru', $mailarray['name']);  
                            }
                        $message->subject('Обратный звонок с сайта');
                    });
                    break;

                case "saunadoor":
                    Mail::send('emails.sauna-calculator', $mailarray, function($message) use ($mailarray) {
                        $message->from($mailarray['email'], $mailarray['name'] );
                        $message->to('ipopov@steklo-group.ru', 'Илья Попов');
                        $message->setCc($mailarray['email'], $mailarray['name']);
                        $message->replyTo($mailarray['email'], $mailarray['name'] );
                        $message->subject('Заказ двери для сауны');
                    });
                    break;
            }

    }
}
