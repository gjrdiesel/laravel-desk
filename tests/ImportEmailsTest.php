<?php

use App\Mailbox;
use App\Ticket;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ImportEmailsTest extends TestCase
{
    //    use DatabaseMigrations;

    public function testHandlesAnEmptyMailbox()
    {
        // Clear out inbox

//        $messages = Mailbox::getMessages();

//        $this->assertEmpty($messages);
    }

    public function testSavesANewTicketWithTicketNumber()
    {
        // Send one new ticket

        Mailbox::import();
    }

    public function testSavesANewCommentTicketWithTicketId()
    {
        // Send one new ticket

        //Mailbox::import();
    }
}
