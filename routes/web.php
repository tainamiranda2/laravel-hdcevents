<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventsController;

Route::get('/',[EventsController::class,'index'] );
Route::get('/events/create',[EventsController::class,'create'])->middleware('auth');
Route::get('/events/{id}',[EventsController::class,'show'] );
Route::post('/events',[EventsController::class,'store'] );
Route::delete('/events/{id}',[EventsController::class,'destroy'])->middleware('auth');

Route::get('/events/edit/{id}',[EventsController::class,'edit'])->middleware('auth');
    
Route::get('/dashboard',[EventsController::class,'dashboard'])->middleware('auth');

