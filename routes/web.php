<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\View\Components\Home;
use App\View\Components\StampsList;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/stamps', function () {
    $stampsListComponent = new StampsList();
    return $stampsListComponent->render();
});

Route::get('/home', function () {
    $homeComponent = new Home();
    return $homeComponent->render();
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
