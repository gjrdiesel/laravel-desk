<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $guarded = [];

    public static function saveFromMessage($message)
    {
        self::create([
            'subject'    => $message->subject,
            'created_at' => $message->date,
            'from_mail'  => $message->from[0]->mail,
            'from_name'  => $message->from[0]->personal,
            'text'       => $message->bodies['text']->content,
            'html'       => $message->bodies['html']->content,
            'raw'        => json_encode($message),
        ]);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
