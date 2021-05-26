<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderCreateController;

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
    return view('welcome');
});

Route::get('/place-order', OrderCreateController::class);

Route::get('/ws/{channel_name}/{event_name}', function($channel_name, $event_name){
	echo $channel_name." | ".$event_name;
});
