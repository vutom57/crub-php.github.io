<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SinhVienController;
use App\Models\sinhvien;

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
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/sinhvien',SinhVienController::class);
    Route::get('/dashboard', [SinhVienController::class, 'index'])->name('dashboard');
    Route::get('/sinhvien/create', [SinhVienController::class, 'create'])->name('sinhvien.create');
    Route::post('/sinhvien', [SinhVienController::class, 'store'])->name('sinhvien.store');
    Route::get('/sinhvien/{sv}', [SinhVienController::class, 'show'])->name('sinhvien.show');
    Route::get('/sinhvien/{sv}/edit', [SinhVienControllerr::class, 'edit'])->name('sinhvien.edit');

});
require __DIR__.'/auth.php';
