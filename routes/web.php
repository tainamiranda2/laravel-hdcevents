<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventsController;

Route::get('/',[EventsController::class,'index'] );
Route::get('/events/create',[EventsController::class,'create'] );
Route::get('/events/update',[EventsController::class,'update'] );
Route::get('/events/delete',[EventsController::class,'delete'] );
    
//blade 
  
