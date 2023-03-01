<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ReceitaController;

Route::get('/',[ReceitaController::class,'index'] );
    //blade 
  

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/product/{id}', function ($id) {
    return view('product',['id'=>$id]);
});
