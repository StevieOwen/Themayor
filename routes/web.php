<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Appartmentcontroller;
use App\Http\Controllers\Customercontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/appartements',[Appartmentcontroller::class,"renderAppartments"]);

Route::get('/contact',[Customercontroller::class, "renderContacts"]);
Route::get('/services',[Customercontroller::class, "renderServices"]);