<?php

use App\Http\Controllers\CategoryRsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QueuesController;
use App\Http\Controllers\RumahSakitsController;
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

Route::get('/', function () {
    return view("welcome");
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

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

    Route::resource('rumahSakit',RumahSakitsController::class);
    Route::get("rumahSakit/{rumahSakit}/category", [RumahSakitsController::class,'showCategoryRumahSakit'])->name("rumahSakit.category");
    Route::get("rumahSakit/{category}/category/list", [RumahSakitsController::class,'showCategoryRumahSakitList'])->name("rumahSakit.categoryList");
    Route::post("rumahSakit/{category}/queue", [RumahSakitsController::class,'storeQueue'])->name("rumahSakit.queue");
    Route::resource('kategori',CategoryRsController::class);
    Route::resource('queue',QueuesController::class);
    Route::get("history",[QueuesController::class,'history'])->name("queues.history");
});
