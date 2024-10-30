<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminTemplateController;
use App\Http\Controllers\HomeTemplateController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/about', function () {
    return view('frontend.about');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin',[AdminTemplateController::class,'index'])->name('admin.index');
Route::get('/home',[HomeTemplateController::class,'index']);



//admin dashboard

Route::get('/admin/products_list', [ProductController::class, 'showproducts'])->name('products_list');

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


require __DIR__.'/auth.php';

