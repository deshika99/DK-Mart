<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminTemplateController;
use App\Http\Controllers\HomeTemplateController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController; 
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin',[AdminTemplateController::class,'index'])->name('admin.index');
Route::get('/home',[HomeTemplateController::class,'index']);



//admin dashboard

Route::get('/admin/products_list', [ProductController::class, 'showproducts'])->name('products_list');

Route::get('products/{product}/view', [ProductController::class, 'view_details'])->name('products.view');
Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/admin/add_products', [ProductController::class, 'displayCategories'])->name('add_products');
Route::get('/api/subcategories/{categoryId}', [ProductController::class, 'getSubcategories']);
Route::get('/api/sub-subcategories/{subcategoryId}', [ProductController::class, 'getSubSubcategories']);


Route::get('/admin/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/admin/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/admin/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/admin/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/admin/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/admin/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

Route::view('/admin/customers', 'AdminDashboard.customer')->name('customers');
Route::view('/admin/customer-details', 'AdminDashboard.customer-details')->name('customer-details');

Route::view('/admin/orders', 'AdminDashboard.orders')->name('orders');
Route::view('/admin/order-details', 'AdminDashboard.order-details')->name('order-details');

Route::view('/admin/affiliate_customers', 'AdminDashboard.affiliate_customers')->name('affiliate_customers');
Route::view('/admin/Affiliatecustomer-details', 'AdminDashboard.Affiliatecustomer-details')->name('Affiliatecustomer-details');

Route::view('/admin/reviews', 'AdminDashboard.reviews')->name('reviews');
Route::view('/admin/customer_inquiries', 'AdminDashboard.inquiries')->name('inquiries');

Route::view('/admin/profile', 'AdminDashboard.profile')->name('profile');

Route::view('/admin/sellers', 'AdminDashboard.sellers')->name('sellers');
Route::view('/admin/seller-details', 'AdminDashboard.seller-details')->name('seller_details');

Route::view('/admin/manage_company', 'AdminDashboard.manage_company')->name('manage_company');

Route::resource('system_users', UserController::class);
Route::get('/admin/users', [UserController::class, 'show'])->name('users');
Route::post('/admin/users', [UserController::class, 'store'])->name('system_users.store');
Route::get('/admin/edit_users/{id}', [UserController::class, 'edit'])->name('edit_users');
Route::post('/admin/edit_users/{id}', [UserController::class, 'update'])->name('update_users');
Route::delete('/admin/edit_users/{id}', [UserController::class, 'destroy'])->name('delete_users');

Route::view('/admin/role_list', 'AdminDashboard.role_list')->name('role_list');

require __DIR__.'/auth.php';
