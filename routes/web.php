<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminClassicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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
    return redirect()->route('login');
});
Route::get('/test', function() {
    return view('auth.register');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('join', [SmsController::class, 'join'])->name('join');

Route::get('/show&={id}', [ArticleController::class, 'show'])->name('article.show');

Route::get('/newsfeed', [HomeController::class, 'newsfeed'])->name('newsfeed');
Route::get('/groups', [HomeController::class, 'groups'])->name('groups');
Route::get('/courses', [HomeController::class, 'courses'])->name('courses');
Route::get('/events', [HomeController::class, 'events'])->name('events');
Route::get('/badges', [HomeController::class, 'badges'])->name('badges');

Route::middleware(['auth'])->group(function() {
    Route::get('/completeProfile', [ProfileController::class, 'completeProfile'])->name('profile.complete');
    Route::post('/completeProfile', [ProfileController::class, 'finishCompleteProfile'])->name('profile.completeUpdate');
    Route::get('/myProfile', [ProfileController::class, 'myProfile'])->name('profile.mine');
    Route::get('/editProfile', [ProfileController::class, 'editMyProfile'])->name('profile.editMine');
    Route::post('/editProfile', [ProfileController::class, 'updateMyProfile'])->name('profile.update');
});


Route::middleware(['auth', 'admin'])->group(function() {
    Route::get('/create-article', [ArticleController::class, 'addPost'])->name('article.create');
    Route::post('/add-article', [ArticleController::class, 'publishPost'])->name('article.publish');
    Route::get('/edit-article&={id}', [ArticleController::class, 'editPost'])->name('article.edit');
    Route::post('/update-article&={id}', [ArticleController::class, 'updatePost'])->name('article.update');

    Route::get('/admin/students', [AdminClassicController::class, 'students'])->name('admin.students');
    Route::get('/admin/list', [AdminClassicController::class, 'adminList'])->name('admin.list');

    Route::get('/admin/specialities', [AdminClassicController::class, 'specialities'])->name('admin.specialities');
    Route::get('/admin/skills', [AdminClassicController::class, 'skills'])->name('admin.skills');
    Route::get('/admin/badges', [AdminClassicController::class, 'badges'])->name('admin.badges');

    Route::get('/admin/specialities/add', [AdminClassicController::class, 'specialitiesAdd'])->name('speciality.add');
    Route::post('/admin/specialities/add', [AdminClassicController::class, 'specialitiesSave'])->name('speciality.save');
    Route::post('/admin/specialities/update', [AdminClassicController::class, 'specialitiesUpdate'])->name('speciality.update');
    Route::post('/admin/specialities/delete', [AdminClassicController::class, 'specialitiesDelete'])->name('speciality.delete');

    Route::get('/admin/skills/add', [AdminClassicController::class, 'skillsAdd'])->name('skill.add');
    Route::post('/admin/skills/add', [AdminClassicController::class, 'skillsSave'])->name('skill.save');
    Route::post('/admin/skills/update', [AdminClassicController::class, 'skillsUpdate'])->name('skill.update');
    Route::post('/admin/skills/delete', [AdminClassicController::class, 'skillsDelete'])->name('skill.delete');

    Route::get('/admin/badges/add', [AdminClassicController::class, 'badgesAdd'])->name('badge.add');
    Route::post('/admin/badges/add', [AdminClassicController::class, 'badgesSave'])->name('badge.save');
    Route::post('/admin/badges/update', [AdminClassicController::class, 'badgesUpdate'])->name('badge.update');
    Route::post('/admin/badges/delete', [AdminClassicController::class, 'badgesDelete'])->name('badge.delete');
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
/*
Route::any('/{any}', function () {
    return back();
});
*/
