<?php

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

Route::get('/', [\App\Http\Controllers\PagesController::class, 'home'])->name('home');

Route::get('/registration/permanent', [\App\Http\Controllers\FormsController::class, 'createPermanent'])->name('registration.permanent');
Route::post('/registration/permanent', [\App\Http\Controllers\FormsController::class, 'storePermanent']);

Route::get('/registration/kennel', [\App\Http\Controllers\FormsController::class, 'createKennel'])->name('registration.kennel');
Route::post('/registration/kennel', [\App\Http\Controllers\FormsController::class, 'storeKennel']);

Route::get('/registration/litter', [\App\Http\Controllers\FormsController::class, 'createLitter'])->name('registration.litter');
Route::post('/registration/litter', [\App\Http\Controllers\FormsController::class, 'storeLitter']);

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
//
//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});
//
//require __DIR__.'/auth.php';
