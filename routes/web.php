<?php

use App\Http\Controllers\FormsController;
use App\Http\Controllers\PagesController;
use App\Http\Livewire\Registration\Permanent;
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

Route::get('/', [PagesController::class, 'home'])->name('home');

Route::get('/registration/permanent', Permanent::class)->name('registration.permanent');

Route::get('/permanent', [
    FormsController::class,
    'createPermanent',
])->name('registration.permanent');

Route::get('/registration/kennel', [
    FormsController::class,
    'createKennel',
])->name('registration.kennel');
Route::post('/registration/kennel', [FormsController::class, 'storeKennel']);

Route::get('/registration/litter', [
    FormsController::class,
    'createLitter',
])->name('registration.litter');
Route::post('/registration/litter', [FormsController::class, 'storeLitter']);

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
