<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\View\Components\Home;
use App\View\Components\StampsList;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\StampController;
use App\Http\Controllers\ContactController;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/detail/{id}', [DetailController::class, 'show'])->name('detail');

Route::get('/shop', [ShopController::class, 'index'])->name('shop');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::resource('stamps', StampController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
