<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\frontController;

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



// Front Page

Route::prefix('/home')->group(function () {
    Route::get('/', [frontController::class, 'homepage'])->name('home.index');
    Route::get('listing-details/{id}', [frontController::class, 'listingsdetails'])->name('listing.details');
    Route::get('listing/{cnameslug}', [frontController::class, 'listingscategorywise'])->name('listing.category');
});


// Admin Login
Route::get('/admin/login', [adminController::class, 'adminlogin'])->name('admin.login');
Route::post('/admin/login', [adminController::class, 'adminloginstore'])->name('admin.login.store');

// Admin Loginn
Route::middleware('auth:admin')->group(function () {
    Route::get('dashboard', [adminController::class, 'Dashboard'])->name('index');
    Route::get('logout', [adminController::class, 'logout'])->name('logout');
    // Add Category
    Route::prefix('/category')->group(function () {
        Route::get('/add-category', [categoryController::class, 'index'])->name('category.index');
        Route::post('/category-save', [categoryController::class, 'store'])->name('category.save');
        Route::get('/category-list', [categoryController::class, 'categorylist'])->name('category.list');
        Route::get('/category-edit/{id}', [categoryController::class, 'categoryedit'])->name('category.edit');
        Route::post('/category-update/{id}', [categoryController::class, 'categoryupdate'])->name('category.update');
        Route::get('/category-delete/{id}', [categoryController::class, 'categorydelete'])->name('category.delete');
    });
    // Add Category
    // Add Category
    Route::prefix('/listing')->group(function () {
        Route::get('/add-listing', [ListingController::class, 'index'])->name('listing.index');
        Route::post('/list-save', [ListingController::class, 'store'])->name('list.save');
        Route::get('/listing-list', [ListingController::class, 'listinglist'])->name('listing.list');
        Route::get('/listing-edit/{id}', [ListingController::class, 'listingedit'])->name('listing.edit');
        Route::post('/listing-update/{id}', [ListingController::class, 'listingupdate'])->name('listing.update');
        Route::get('/listing-delete/{id}', [ListingController::class, 'listingdelete'])->name('listing.delete');
    });
    // Add Category

});
