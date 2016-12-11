<?php

namespace App;

class Mailbox
{

    static function import()
    {
        $messages = Mailbox::getMessages();

        return new Import($messages);
    }

    static function getMessages()
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