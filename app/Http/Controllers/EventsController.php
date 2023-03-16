<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventsController extends Controller
{
    public function index(){
  //chamando todos os eventos

    $events=Event::all();

    return view('welcome',['events'=>$events]);

    }

    public function create(){
        return view('events.create');

    }
}
