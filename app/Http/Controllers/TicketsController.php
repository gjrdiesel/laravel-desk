<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    function index()
    {
        $query = request('search');
        $filter = request('filter');

        $tickets = \App\Ticket::query();

        if ($query) {
            $tickets->where('subject', 'like', "%{$query}%");
        }

        if (! $filter || $filter != 'archived') {
            $tickets->where('status', '!=', 'archived');
        }

        if ($filter) {
            $tickets->whereStatus($filter);
        }

        return $tickets->withCount('comments')->latest()->get();
    }

    function show(\App\Ticket $ticket)
    {
        return array_merge([$ticket], $ticket->comments->toArray());
    }

    function delete(\App\Ticket $ticket)
    {
        $ticket->update(['status' => 'archived']);
    }
}
