<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WaterMachinesController;
use App\Http\Controllers\WaterPackagesController;


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
    return view('homepage');
});

Route::get('/articles/index',[ArticlesController::class,'index'])->name('articles.index');
Route::get('/articles/{articleId}',[ArticlesController::class,'show'])->name('articles.show');
Route::get('/forum/index',[ForumController::class,'index'])->name('forum.index');
Route::get('/order/index',[OrderController::class,'index'])->name('order.index');
Route::get('/water-machines/index',[WaterMachinesController::class,'index'])->name('water-machines.index');
Route::get('/water-packages/index',[WaterPackagesController::class,'index'])->name('water-packages.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
