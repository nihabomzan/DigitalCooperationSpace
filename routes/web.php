<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/groups', function () {
    return view('groups');
})->name('groups');

Route::get('/group-chat', function () {
    return view('group-chat');
})->name('group-chat');

Route::get('/review', function () {
    return view('review');
})->name('review');

Route::get('/meeting', function () {
    return view('meeting');
})->name('meeting');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
