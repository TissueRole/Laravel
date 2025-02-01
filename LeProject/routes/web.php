<?php
use App\Http\Controllers\GreetController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return '<h1>Hello Laravel</h1>';
});
Route::get('/greet', [GreetController::class, 'greet']);