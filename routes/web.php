<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ScreenController;
use Illuminate\Http\Request;

// auth 
Route::get('/auth/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/auth/signup', [AuthController::class, 'signup'])->name('auth.signup');
Route::POST('/auth/register/user', [AuthController::class, 'RegisterUser'])->name('auth.registeruser');
Route::POST('/auth/login/user', [AuthController::class, 'LoginUser'])->name('auth.loginuser');


Route::middleware('auth')->group(function () {

    // User 
    Route::get('/', [ScreenController::class, 'home'])->name('home');
    Route::get('/aboutus', [ScreenController::class, 'aboutUs'])->name('aboutus');
    Route::get('/allCars', [ScreenController::class, 'allCars'])->name('allCars');
    Route::get('/carDetails', [ScreenController::class, 'carDetails'])->name('carDetails');
    Route::get('/checkout', [ScreenController::class, 'checkOut'])->name('checkOut');
    Route::get('/search', [ScreenController::class, 'CarSearch'])->name('carSearch');
    // DB
    Route::get('/car/details/{id}', [ScreenController::class, 'carinfoDetails'])->name('car-details');
    Route::post('/placeorder', [ScreenController::class, 'placeOrder'])->name('place-order');
    Route::get('/myRentals', [ScreenController::class, 'myRentals'])->middleware('auth')->name('myRentals');

    // auth
    Route::POST('/logout/user', [AuthController::class, 'LogoutUser'])->name('logoutuser');


    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->middleware(['auth', 'verified'])->name('dashboard');

    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin
Route::prefix('Admin')->group(function () {
    Route::get('/adminhome', [AdminController::class, 'home'])->name('Admin.adminhome');
    Route::get('/admincarlist', [AdminController::class, 'carList'])->name('Admin.admincarlist');
    Route::get('/adminaddcar', [AdminController::class, 'addCar'])->name('Admin.adminaddcar');
    Route::get('/admininfo', [AdminController::class, 'info'])->name('Admin.admininfo');
    Route::get('/adminInfoForm', [AdminController::class, 'infoForm'])->name('Admin.adminInfoForm');
    Route::get('/adminorderdetails', [AdminController::class, 'OrderDetails'])->name('Admin.adminOrderDetails');
    // DB 
    Route::POST('/admin/store-car', [AdminController::class, 'storecar'])->name('admin.storecar');
    Route::get('/admin/edit/car/{id}', [AdminController::class, 'editCar'])->name('admin.editCar');
    Route::put('/admin/update/car/{id}', [AdminController::class, 'updateCar'])->name('admin.updateCar');
    Route::delete('/admin/delete/car/{id}', [AdminController::class, 'DeleteCars'])->name('admin.Deletecars');
    Route::POST('/admin/companyinfo', [AdminController::class, 'AddCompanyinfo'])->name('admin.AddCompanyinfo');
    Route::get('/admin/edit/CompanyInfo/{id}', [AdminController::class, 'EditCompanyInfo'])->name('admin.EditCompanyInfo');
    Route::put('/admin/update/CompanyInfo/{id}', [AdminController::class, 'updateCompanyinfo'])->name('admin.updateCompanyinfo');
    Route::delete('/admin/Delete/ComapnyInfo/{id}', [AdminController::class, 'DeleteCompanyInfo'])->name('admin.DeleteCompanyInfo');
    Route::get('/admin/edit/order/status/{id}', [AdminController::class, 'EditOrderStatus'])->name('admin.adminEditOrderStatus');
    Route::put('/admin/update/orderstatus/{id}', [AdminController::class, 'UpdateOrderStatus'])->name('admin.adminupdateOrderStatus');
});

// Passport 
Route::middleware('auth:api')->get('/test', function (Request $request) {
    return response()->json([
        'message' => 'You are authenticated!',
        'user' => $request->user()
    ]);
});


require __DIR__ . '/auth.php';
