<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login/{id?}', function($id = null){
 return view("test_view", ["message" => "O id infromado é {$id}"]);
});

Route::get('/test_view/{welcome?}', function($welcome = null){
    if($welcome){
        return view("test_view", ["message" => $welcome]);
    }else{
        $welcome = "You're not welcome here";
        return view("test_view", ["message" => $welcome]);
    }
   });


