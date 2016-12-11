<?php

namespace App;

class Mailbox
{
    public static function import()
    {
        $messages = self::getMessages();

        return new Import($messages);
    }

    public static function getMessages()
    {
        $messages = [];

        $client = \Client::account('gmail')->deleteOnceRead()->connect();

        $mailboxes = $client->getFolders();

        foreach ($mailboxes as $mailbox) {
            $messages = array_merge($messages, $mailbox->getMessages());
        }

        return $messages;
    }
}
