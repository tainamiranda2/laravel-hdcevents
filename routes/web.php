<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventsController;

Route::get('/',[EventsController::class,'index'] );
Route::get('/events/create',[EventsController::class,'create'] );
Route::post('/events',[EventsController::class,'store'] );
Route::put('/events/update',[EventsController::class,'update'] );
Route::delete('/events/delete',[EventsController::class,'delete'] );
    
//blade 
  
