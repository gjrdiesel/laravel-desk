<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/','HomeController@index');
Route::get('home', 'HomeController@index');

Route::get('tickets',function(){

    $query = request('search');
    $filter = request('filter');

    $tickets = \App\Ticket::query();

    if( $query ){
        $tickets->where('subject','like',"%{$query}%");
    }

    if( !$filter || $filter != 'archived' ){
        $tickets->where('status','!=','archived');
    }

    if( $filter ){
        $tickets->whereStatus($filter);
    }

    return $tickets->withCount('comments')->latest()->get();
});

Route::post('tickets/{ticket}/delete',function(\App\Ticket $ticket){
    $ticket->update(['status'=>'archived']);
});

Route::get('tickets/{ticket}',function(\App\Ticket $ticket){
    return array_merge([$ticket],$ticket->comments->toArray());
});