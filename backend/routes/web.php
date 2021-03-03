<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HelloMiddleware;

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

Route::get('/study', function () {
    return view('samples/study');
});

Route::get('/sample', function () {
    return view('samples/sample');
});

Route::get('/', function () {
    return view('boot_template/index');
});

Route::resource('/index', 'Sample\HelloController');

//Route::get('/index', 'Sample\HelloController@index');
// Route::get('/index', 'Sample\HelloController@index')
//     ->middleware(HelloMiddleware::class);

//Route::post('/index', 'Sample\HelloController@post');
