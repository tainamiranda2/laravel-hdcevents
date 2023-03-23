<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventsController;

Route::get('/',[EventsController::class,'index'] );
Route::get('/events/create',[EventsController::class,'create'] );
Route::get('/events/{id}',[EventsController::class,'show'] );

Route::post('/events',[EventsController::class,'store'] );

Route::put('/events/update',[EventsController::class,'update'] );
Route::delete('/events/delete',[EventsController::class,'delete'] );
    
//blade 
  

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
