<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

Route::get('/', [IndexController::class,'Index'])->middleware(['auth', 'verified']);
Route::get('/dashboard', [IndexController::class,'Index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/uploadkode',[IndexController::class,'UploadKodepos']);
    Route::post('/importkode',[IndexController::class,'ImportKodepos'])->name('ImportKodepos');
    Route::post('/importbase',[IndexController::class,'ImportBase'])->name('ImportBase');
    Route::post('/destroyExcel',[IndexController::class,'destroyExcel'])->name('destroyExcel');
    Route::post('/destroyBase',[IndexController::class,'destroyBase'])->name('destroyBase');
});

require __DIR__.'/auth.php';
