<?php

use App\Http\Controllers\AdminController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\HomeController;

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
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('join', [SmsController::class, 'join'])->name('join');

Route::middleware(['auth', 'admin'])->group(function() {
    Route::get('/admin/students', [AdminController::class, 'students'])->name('students');
});

//Route::post('/success', [RegisterController::class, 'store'])->name('register');

require __DIR__.'/auth.php';
/*



Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth'])->name('dashboard');
*/

/*
Route::get('/', function () {
    return view('withPhoneVerification.getin');
    //return view('welcome');
});

Route::get('/success', [SmsController::class, 'success'])->name('success');
Route::post('join', [SmsController::class, 'join'])->name('join');
Route::post('sendSms', [SmsController::class, 'send'])->name('sms.send');
Route::get('verifySms', [SmsController::class, 'getVerify'])->name('sms.verify');
Route::post('verifySmss', [SmsController::class, 'verify'])->name('sms.verify');
Route::get('joined', [SmsController::class, 'joined']);
*/

Route::any('/{any}', function () {
    return back();
});
