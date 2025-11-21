<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ScreenController;

// User 
Route::get('/', [ScreenController::class, 'home'])->name('home');
Route::get('/aboutus', [ScreenController::class, 'aboutUs'])->name('aboutus');
Route::get('/allCars', [ScreenController::class, 'allCars'])->name('allCars');
Route::get('/carDetails',[ScreenController::class,'carDetails']) ->name('carDetails');
Route::get('/checkout',[ScreenController::class,'checkOut']) ->name('checkOut');
Route::get('/myRentals',[ScreenController::class,'myRentals'])->name('myRentals');

// Admin
Route::prefix('Admin')->group(function () {
    Route::get('/adminhome', [AdminController::class, 'home'])->name('Admin.adminhome');
    Route::get('/admincarlist', [AdminController::class, 'carList'])->name('Admin.admincarlist');
    Route::get('/adminaddcar', [AdminController::class, 'addCar'])->name('Admin.adminaddcar');
    Route::get('/admininfo', [AdminController::class, 'info'])->name('Admin.admininfo');
    Route::get('/adminInfoForm', [AdminController::class, 'infoForm'])->name('Admin.adminInfoForm');
    Route::POST('/admin/store-car', [AdminController :: class, 'storecar'])->name('admin.storecar');
    Route::get('/admin/edit/car/{id}',[AdminController :: class,'editCar'])->name('admin.editCar');
    Route::put('/admin/update/car/{id}' ,[AdminController:: class, 'updateCar'])->name('admin.updateCar');
    Route::delete('admin/delete/car/{id}',[AdminController:: class, 'DeleteCars'])->name('admin.Deletecars');
});
// auth 
Route::get('/auth/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/auth/signup', [AuthController::class, 'signup'])->name('auth.signup');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
