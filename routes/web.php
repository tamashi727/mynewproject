<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AdminController;


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

//Route::get('/', function () {
   // return view('welcome');
//});


Route::get('/',[HomeController::class,'index']);
Route::get('/indexx',[HomeController::class,'indexx']);
Route::get('/ttindex',[HomeController::class,'ttindex']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/career',[HomeController::class,'career']);
Route::get('/services',[HomeController::class,'services']);
Route::get('/servicedetails',[HomeController::class,'servicedetails']);
Route::get('/faq',[HomeController::class,'faq']);
Route::get('/team',[HomeController::class,'team']);
Route::get('/teamdetails',[HomeController::class,'teamdetails']);
Route::get('/whychoose',[HomeController::class,'whychoose']);
Route::get('/portfolio',[HomeController::class,'portfolio']);
Route::get('/portfoliodetails',[HomeController::class,'portfoliodetails']);
Route::get('/news',[HomeController::class,'news']);
Route::get('/newsdetails',[HomeController::class,'newsdetails']);

Route::get('/contactus',[ContactController::class,'contact']);
Route::post('/send-message',[ContactController::class,'sendEmail'])->name('contact.send');

Route::get('/home',[HomeController::class,'redirect']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/users',[DashboardController::class,'users']);
Route::get('/view-users/{id}',[DashboardController::class,'viewusers']);
Route::get('/deleteusers/{id}',[DashboardController::class,'deleteusers']);
Route::get('/addbannerimage',[AdminController::class,'addbannerimage']);
Route::post('/uploadimage',[AdminController::class,'uploadimage']);
Route::get('/showimage',[AdminController::class,'showimage']);
Route::get('/deleteimage/{id}',[AdminController::class,'deleteimage']);
Route::get('/showmessage',[AdminController::class,'showmessage']);
Route::get('/deletemessage/{id}',[AdminController::class,'deletemessage']);
Route::get('/changephone',[AdminController::class,'changephone']);
Route::post('/uploadphone',[AdminController::class,'uploadphone']);
Route::get('/showphone',[AdminController::class,'showphone']);
Route::get('/deletephone/{id}',[AdminController::class,'deletephone']);
