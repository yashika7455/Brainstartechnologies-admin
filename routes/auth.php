<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Employee\AttendanceController;
use App\Http\Controllers\Employee\Applyleavescontroller;
use App\Http\Controllers\Employee\ProjectReportController;
use App\Http\Controllers\Employee\Salarystatuscontroller;
use App\Http\Controllers\Employee\Holidayscontroller;
use App\Http\Controllers\EmployeeleaveController;
use App\Http\Controllers\LeaveController;
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});
Route::prefix('employee')->group(function () {
Route::get('holidays', [Holidayscontroller::class, 'holidays'])->name('employee.holidays');
Route::get('/applyleaves', [EmployeeleaveController::class, 'create'])->name('employee.applyleaves');
Route::post('/leave/store', [EmployeeleaveController::class, 'store'])->name('leave.store');
Route::get('/salarystatus', [Salarystatuscontroller::class, 'salarystatus']);
Route::get('/attendance', [AttendanceController::class, 'index'])->name('attendance.index');
Route::post('/attendance/punch-in', [AttendanceController::class, 'punchIn'])->name('attendance.punch-in');
Route::post('/attendance/punch-out', [AttendanceController::class, 'punchOut'])->name('attendance.punch-out');
Route::get('/attendance/break-in', [AttendanceController::class, 'breakIn'])->name('attendance.break-in');
Route::get('/attendance/break-out', [AttendanceController::class, 'breakOut'])->name('attendance.break-out');
Route::get('/project-report', [ProjectReportController::class, 'index'])->name('project-report');
Route::post('/daily-status', [ProjectReportController::class, 'store'])->name('daily_status.store');
});
