<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SesionsController;
use Faker\Guesser\Name;

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

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/register',[RegisterController::class, 'create'])
->middleware('guest')
->name('register.index');


Route::post('/register',[RegisterController::class, 'store'])
->name('register.store');

Route::get('/login',[SesionsController::class, 'create'])
->name('login.index');




Route::post('/login',[SesionsController::class, 'store'])

->name('login.store');  

Route::get('/logout',[SesionsController::class, 'destroy'])
->middleware('auth')
->name('login.destroy');  





    




    
