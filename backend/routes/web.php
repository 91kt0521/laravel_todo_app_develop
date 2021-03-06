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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', function () {
    return view('home');
});

// laravelとVue.jsと使用しタスクアプリを作成
Route::get('/', function () {
    // return view('boot_template/index');
    return view('app');
});

Route::get('/index', 'HelloController@index');

// Laravelを使用したTodoアプリ
Route::resource('/task/todo', 'Task\TodoController');
