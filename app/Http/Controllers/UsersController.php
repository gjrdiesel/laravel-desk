<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    function index()
    {
        $query = request('search');
        $users = \App\User::query();

        if ($query) {
            $users->where('name', 'like', "%{$query}%");
        }

        return $users->get();
    }
}
