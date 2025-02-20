<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Admin Routes with Named Routes
Route::get('/admin', [HomeController::class, 'administrator'])->name('admin');
Route::get('/admin/user-management', [HomeController::class, 'administratorUserManagement'])->name('admin.user-management');
Route::get('/admin/notifications', [HomeController::class, 'administratorNotifications'])->name('admin.notifications');
Route::get('/admin/report', [HomeController::class, 'administratorReport'])->name('admin.report');
Route::get('/admin/submission', [HomeController::class, 'administratorSubmission'])->name('admin.submission');
Route::get('/admin/closure', [HomeController::class, 'administratorClosure'])->name('admin.closure');
Route::get('/admin/logs', [HomeController::class, 'administratorLogs'])->name('admin.logs');
Route::get('/admin/inquiry', [HomeController::class, 'administratorInquiry'])->name('admin.inquiry');
Route::get('/admin/edit-user-data', [HomeController::class, 'administratorEditUserData'])->name('admin.edit-user-data');

// Marketing Manager & Coordinator
Route::get('/marketing-manager', [HomeController::class, 'marketingManager'])->name('marketing.manager');
Route::get('/marketing-coordinator', [HomeController::class, 'marketingCoordinator'])->name('marketing.coordinator');

Route::get('/', function () {
    return view('home');
});

Route::get('/contributions', function () {
    return view('contributions.index');
})->name('contributions');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
