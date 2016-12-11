<?php

namespace App;

class Import
{

    private $currentMessage = null;

    public function __construct(array $messages)
    {

        foreach ($messages as $message) {

            $this->currentMessage = $message;

            if( $this->isResponseToTicket() ){
                continue;
            }

            Ticket::saveFromMessage($message);
        }

    }

    private function isResponseToTicket()
    {
        // Look for #{anynumber} in the subject
        $ticketNumberRegex = '/#(\d*)/';

        preg_match($ticketNumberRegex, $this->currentMessage->subject, $matches);

        // No matches for #id then we'll just create a new ticket
        if (empty($matches)) {
            return false;
        }

        $ticketId = $matches[1];
        $ticket = Ticket::find($ticketId);

        if (! $ticket) {
            // Go back to just creating a new ticket
            return false;
        }

        // It's a new response, so reopen the ticket if need be
        //$ticket->reopen();

        // Save this email as a comment to the ticket to the original ticket
        Comment::saveFromMessage($this->currentMessage, $ticket);

        return true;
    }
}