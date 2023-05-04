<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAurthController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index']);
Route::get('/login',[CustomAurthController::class,'login']);
Route::get('/registration',[CustomAurthController::class,'registration']);
Route::post('/register-user',[CustomAurthController::class,'registerUser'])->name('register-user');
Route::post('/login-user',[CustomAurthController::class,'loginuser'])->name('login-user');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/dashboard', function () {
    return view('admin.home');
 });
