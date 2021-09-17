<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\firstcontroller;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [firstcontroller::class, 'welcome']);

// Route::get('/dipta', function () {
//     return "love you";
// });

// Route::get('/homepage', function () {
//     return view('homepage',['name'=>"Dipta saha"]);
// });
Route::get('/homepage', [firstcontroller::class, 'home'])->middleware('product');
Route::get('/aboutpage', [firstcontroller::class, 'about'])->name('/aboutpage');
