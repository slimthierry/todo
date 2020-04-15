<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('/' , 'TodoController@index');
    
    Route::resource('todo' , 'TodoController');
});

// Route::get('/home', function ($id) {
//     if (Auth::user()->admin ==0 ){
//         return view('home');
//     }else{
//         $users['users'] = \App\User::all();
//         return view('', $users);
//     }
// });
