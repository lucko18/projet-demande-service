<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CitoyenController;
use App\Http\Controllers\PieceController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\DemandePieceController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


Route::resource('services', ServiceController::class);
Route::resource('citoyens', CitoyenController::class);
Route::resource('pieces', PieceController::class);
Route::resource('demandes', DemandeController::class);
Route::resource('demande_pieces', DemandePieceController::class);

});

require __DIR__.'/auth.php';
