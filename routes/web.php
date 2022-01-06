<?php

use Illuminate\Support\Facades\Route;
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

//Route::get('/', function () {
   // return view('welcome');
//});

Route::get('/',[HomeController::class,'index']);
Route::get('/indexx',[HomeController::class,'indexx']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/career',[HomeController::class,'career']);
Route::get('/services',[HomeController::class,'services']);
Route::get('/servicedetails',[HomeController::class,'servicedetails']);
Route::get('/faq',[HomeController::class,'faq']);

//Route::get('/home',[HomeController::class,'redirect']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
