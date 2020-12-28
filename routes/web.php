<?php

use App\Http\Controllers\Backend\Auth\UserController;
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

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified')->middleware(['password.confirm']);;

Route::get('/user/dashboard', function (){
    return view('backend.dashboard');
});


/*
 * Backend Routes
 * Namespaces indicate folder structure
 */
Route::group(['prefix' => 'user', 'as' => 'admin.'], function () {

    Route::group(['prefix' => 'auth','as' => 'auth.',], function () {
        Route::resource('user', UserController::class);
    });
});
