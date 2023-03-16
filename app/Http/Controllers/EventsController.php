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

    public function store(Request $request){
      $event=new Event;

      $event->title=$request->title;
      $event->descricao=$request->descricao;
      $event->city=$request->city;
      $event->private=$request->private;

      $event ->save();

      return redirect('/');
    }
}
