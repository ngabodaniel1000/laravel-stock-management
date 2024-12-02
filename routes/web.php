<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductInController;
use App\Http\Controllers\ProductOutController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

// Other routes...

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('products_in', ProductInController::class);
});

// Web Routes
Route::get('/', function () {
    return view('welcome');
});
Route::get('/report', [ReportController::class, 'index'])->name('reports.index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Grouping product routes under authentication middleware
Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('products', ProductController::class);
});


Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update'); // Ensure this is PATCH


// Profile management routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('products_out', ProductOutController::class);
});
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

require __DIR__.'/auth.php';
