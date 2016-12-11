<?php

use App\Ticket;
use App\Mailbox;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

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
