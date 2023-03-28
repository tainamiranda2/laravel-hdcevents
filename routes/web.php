<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventsController;

Route::get('/',[EventsController::class,'index'] );
Route::get('/events/create',[EventsController::class,'create'] )->middleware('auth');
Route::get('/events/{id}',[EventsController::class,'show'] );

Route::post('/events',[EventsController::class,'store'] );

Route::put('/events',[EventsController::class,'update'] );
Route::delete('/events/{id}',[EventsController::class,'destroy'] );
    
Route::get('/dashboard',[EventsController::class,'dashboard']) ->middleware('auth');

