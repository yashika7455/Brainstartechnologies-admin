<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Admin\ProfileController;
<<<<<<< HEAD
use App\Http\Controllers\Admin\Auth\AllemployeesController;
use App\Http\Controllers\Admin\Auth\employeeslistController;
use App\Http\Controllers\Admin\Auth\AttendenceController;
use App\Http\Controllers\Admin\Auth\LeaveController;
use App\Http\Controllers\Admin\Auth\AdminProfileController;
use App\Http\Controllers\Admin\Auth\EmpProfileController;
use App\Http\Controllers\Admin\Auth\DashboardController;
use App\Http\Controllers\Admin\Auth\EmployeeController;


use Illuminate\Support\Facades\Route;



Route::middleware('guest:admin')->prefix('admin')->name('admin.')->group(function () {
   




=======
use Illuminate\Support\Facades\Route;

Route::middleware('guest:admin')->prefix('admin')->name('admin.')->group(function () {
>>>>>>> remoterepo/main
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

  
});

Route::middleware('auth:admin')->prefix('admin')->name('admin.')->group(function () {
<<<<<<< HEAD
      
    Route::get('employeeslist', [employeeslistController::class, 'employeeListing'])->name('employeeslist');

    Route::get('attendence', [AttendenceController::class, 'attendenceListing'])->name('attendence');

    Route::get('leaves', [ LeaveController::class, 'LeaveListing'])->name('leaves');

    Route::get('app', [DashboardController::class, 'dashboardListing'])->name('app');

    

    Route::get('employeeprofile', [EmpProfileController::class, 'empprofileListing'])->name('employeeprofile');
    //employee route fro admin 
   

    

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    
    })->middleware(['auth', 'verified'])->name('admin.dashboard');

   
    
    Route::middleware('auth:admin')->prefix('admin')->name('admin.')->group(function () {
        // Other routes...
    
        Route::post('/check-email', [EmployeeController::class, 'checkEmail']);
    });
    
    Route::get('/dashboard/{id}', [EmployeeController::class, 'showDashboard']);
    
    
     
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        
=======
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
    
 
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

>>>>>>> remoterepo/main

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});
