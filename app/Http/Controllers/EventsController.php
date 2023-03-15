<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventsController extends Controller
{
    public function index(){
  
//$events=Event::all();
$nome='';
$idade=30;

return view('welcome',
[
'nome'=>$nome,
'idade'=>$idade,
'profissao'=>'programador'
]);

    }

    public function create(){
        return view('events.create');

    }
}
