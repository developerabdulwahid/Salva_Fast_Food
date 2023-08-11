<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\FranchiseController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JobsController;

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


Route::get('/',[HomeController::class, 'index'])->name('/');

Route::get('/story', [StoryController::class, 'index'])->name('story');

Route::get('/menu', [MenuController::class, 'index'])->name('menu');

Route::get('/franchise', [FranchiseController::class, 'index'])->name('franchise');
Route::post('/franchise', [FranchiseController::class, 'send_mail']);
// ->name('franchise')
Route::get('/career', [CareerController::class, 'index'])->name('career');
Route::post('/career', [CareerController::class, 'send_mail']);
// ->name('career')

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'send_mail']);
// ->name('contact')
Route::get('/privacy', [HomeController::class, 'privacy'])->name('privacy');

Route::get('/cookie', [HomeController::class, 'cookie'])->name('cookie');

Route::get('/order', [HomeController::class, 'order'])->name('order');

Route::get('/allergen', [MenuController::class, 'allergen'])->name('allergen');


Route::get('cache',function(){
Artisan::call('route:cache');
Artisan::call('view:cache');
Artisan::call('optimize');
dd('done');
});
// Route::view('email', 'customer_job_email');

//----------------------------------------------  Dashbord Routes-------------------
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/admin',[DashboardController::class,'dashboard'])->name('admin');

Route::get('/admin/jobs',[JobsController::class,'index'])->name('jobs');
Route::get('/create-job',[JobsController::class,'create'])->name('new-job');
Route::post('/create-job',[JobsController::class,'store'])->name('new-job');
Route::get('/job-detail/{id}',[JobsController::class,'detail'])->name('job-detail');
Route::get('/delete-job/{id}',[JobsController::class,'destroy'])->name('delete-job');
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
