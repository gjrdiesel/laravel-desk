<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];

    public static function saveFromMessage($message, Ticket $ticket)
    {
        $ticket->comments()->create([
            'subject'    => $message->subject,
            'created_at' => $message->date,
            'from_mail'  => $message->from[0]->mail,
            'from_name'  => $message->from[0]->personal,
            'text'       => $message->bodies['text']->content,
            'html'       => $message->bodies['html']->content,
            'raw'        => json_encode($message),
        ]);
    }
}
