<?php

use App\Http\Controllers\StudentController;
use GuzzleHttp\Psr7\Request;
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

Route::middleware(['auth', 'role'])->group(function() {

});

Route::get('/', function () {
    return view('getin');
    //return view('welcome');
});

Route::get('/success', [StudentController::class, 'success'])->name('success');
Route::post('join', [StudentController::class, 'join'])->name('join');

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
