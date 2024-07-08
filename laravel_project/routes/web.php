<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\VillaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\API\GuestController;


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
    return view('welcome');
});

Route::get('/landingpage', [HomeController::class, 'index'])->name('landingpage');
Route::get('/detailpage', [HomeController::class, 'detailpage'])->name('detailpage');
Route::get('/bookingpage', [HomeController::class, 'bookingpage'])->name('bookingpage');
Route::get('/contactpage', [HomeController::class, 'contactpage'])->name('contactpage');
Route::get('/adminvilla', [VillaController::class, 'index'])->name('adminvilla');
Route::get('/adminguest', [TamuController::class, 'index'])->name('adminguest');

// Route::get('/adminvilla.edit', [VillaController::class, 'edit'])->name('adminvilla.edit');
// Route::delete('/adminvilla.destroy', [VillaController::class, 'destroy'])->name('adminvilla.destroy');
// Route::patch('/adminvilla.update', [VillaController::class, 'update'])->name('adminvilla.update');

// Admin VIlla CRUD
Route::group(['middleware'=>'auth'], function() {
    Route::resource('adminvilla', VillaController::class);
    Route::resource('adminguest', TamuController::class);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
