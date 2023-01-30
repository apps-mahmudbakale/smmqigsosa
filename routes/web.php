<?php

use Jajo\NG;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/membership', function () {
    $ng = new NG();
    $states = $ng->states;
    $hostels = ['Khusri', 'Abdulbasit', 'Minshawi', 'Khuzaifi', 'Shuraim', 'Alsudais', 'Muhammad Bello', 'Nana Khadijah', "Nana A'isha", 'Nana Hafsah', 'Nana Saudah', 'Nana Fatima', "Nana Asma'u"];
    return view('membership', compact('states', 'hostels'));
})->name('membership');


Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
  ]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('membership', [HomeController::class, 'registerMember'])->name('register.member');
