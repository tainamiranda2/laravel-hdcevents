<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //blade 
    $nome = "matheus";
    $idade=29;
    $arr=[1,2,3,4,5];

    return view('welcome',
[
    'nome'=>$nome,
    'idade2'=>$idade,
    'profissao'=>"PRogramação",
    'arr'=>$arr
]
);

});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/product', function () {
    return view('product');
});
