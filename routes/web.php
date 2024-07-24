<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\DumyController;
=======

>>>>>>> remoterepo/main
Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD


Route::get('admin/dumy', [DumyController::class, 'dumyListing'])->name('dumy');

// Route::get('/dumy', function() {
//     return 'Route is working!';
// });


// employees list route



Route::get('/dashboard', function () {
=======
Route::get('employee/dashboard', function () {
>>>>>>> remoterepo/main
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
<<<<<<< HEAD
    
});

require __DIR__.'/auth.php';
require __DIR__.'/admin-auth.php';
=======
});

require __DIR__.'/auth.php';
require __DIR__.'/admin-auth.php';
>>>>>>> remoterepo/main
