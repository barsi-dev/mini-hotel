<?php

use App\Models\Bookings;
use App\Models\GlobalVars;
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
    $var = GlobalVars::find(1)->get();
    return view('home', ['numberOfRooms' => $var[0]->num_rooms]);
});