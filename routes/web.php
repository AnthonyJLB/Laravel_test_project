<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CouponsController;


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
Route::get('/chirps', function () {
    return 'bienvenido ';
})->name('chirps.index');

Route::get('/chirps/{chirp}', function ($chirp) {
    if($chirp==='2'){
        return redirect()->route('chirps.index');
    }
    return 'chiro ' .$chirp;
});

Route::get('/dashboard', function () {
    $user = Auth::user();
    return view('dashboard', compact('user'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/coupons', [CouponsController::class, 'index'])->name('coupons');
Route::get('/coupons/{id}', [CouponsController::class, 'detail'])->name('coupon');

require __DIR__.'/auth.php';
