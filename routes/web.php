<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use Laravel\Socialite\Facades\Socialite;
 
Route::get('/auth/redirect', function () {

    return Socialite::driver('github')->redirect();


});
 
Route::get('/auth/callback', function () {
    //$user = Socialite::driver('github')->user();

    return 'Hello world';
 
    // $user->token
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
