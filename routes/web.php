<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
     $response = Http::get('https://dev.shepherd.appoly.io/fruit.json');
     $items    = $response->object();
      
      //var_dump($items);

    return view('welcome', [
        'items' => $items
    ]);
    
});