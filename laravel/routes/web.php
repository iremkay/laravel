<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controlllers\TeempController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello, Laravel!';
});

Route::get('/hello/{name}/info', function ($name){
    return 'Hello,' . $name . '!!!';
});

Route::get('/temp',[TempController::class, 'tmpFunction']);
