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
    return view('auth.login');
});

Route::get('/home', function () {
    return view('dashboard');
});
Route::get('/myQR', function(){
	return view('myQR');
}
);

Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('login');
})->name('logout');

Route::get('/time_in', 'App\Http\Controllers\BundyClockController@timeIn');

Route::get('/time_out', 'App\Http\Controllers\BundyClockController@timeOut');
