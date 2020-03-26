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
    return view('welcome');
});
Route::get('/recipies', function () {
    //get data from db
    $recipies = [
        ['type' => 'instapot', 'title' => 'mac and cheese','ing' => 'cheese','dir' => 'stir'],
        ['type' => 'stovetop', 'title' => 'splitpea with ham','ing' => 'ham','dir' => 'fry, ass, fart'],
        ['type' => 'slowcooker', 'title' => 'chicken noodle soup','ing' => 'chicken','dir' => 'stir, go, down']
];
    return view('recipies', ['recipies' => $recipies]);
});
