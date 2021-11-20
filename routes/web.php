<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Auth\RegisteredUserController;

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
    return view('getin');
    //return view('welcome');
});

Route::get('/success', [StudentController::class, 'success'])->name('success');
Route::post('join', [StudentController::class, 'join'])->name('join');
Route::post('sendOtp', [StudentController::class, 'sendOtp'])->name('sendOtp');
Route::post('verifyOtp', [StudentController::class, 'verifyOtp'])->name('verifyOtp');

require __DIR__.'/auth.php';

/*
Route::middleware(['auth', 'role'])->group(function() {
});

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth'])->name('dashboard');
*/

Route::any('/{any}', function () {
    return view('getin');

});
