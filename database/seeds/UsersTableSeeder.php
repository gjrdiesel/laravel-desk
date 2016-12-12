<?php

use App\Comment;
use App\Ticket;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->times(5)->create();
        factory(Ticket::class)->times(6)->create();

        foreach (Ticket::all() as $ticket) {
            foreach (factory(Comment::class)->times(rand(1, 10))->make() as $key=>$comment) {
                if( is_bool($comment) ){
                    continue;
                }
                $ticket->comments()->create($comment->toArray());
            }
        }
    }
}
