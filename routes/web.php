<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Trainer\TrainerController;
use App\Http\Controllers\Auth\LoginCtrl;

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

// Route::get('/', function () {
//     return view('index');
// });
Route::middleware('checkRouteList')->group(function () {

Route::get('/Home', function () {
    return view('index');
})->name('Home');

Route::get('trainer/index', [TrainerController::class, 'index'])->name('trainer.index');
Route::post('trainer/muncity', [TrainerController::class, 'muncity'])->name('trainer.muncity');
Route::post('trainer/add', [TrainerController::class, 'AddTrainer'])->name('trainer.add');

});

// Authentication Routes...
Route::get('/login', [LoginCtrl::class, 'LoginForm'])->name('login');
Route::post('/login', [LoginCtrl::class, 'Login'])->name('loginUsers'); 

