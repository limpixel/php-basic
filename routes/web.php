<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

/*------------------------------------------*/ 

Route::get('/', [CategoryController::class, 'index'])->name('frontend_category');




Route::get('/user/all', [UserController::class, 'manage'])->name('frontend_user');
Route::get('/blog/all', [BlogController::class, 'index'])->name('blog-fronted');

Route::get('/blog/show/{key?}', [BlogController::class, 'show'])->name('frontend_blog_show');

Route::get('/product/{id?}', function ($id = null) {
    return view('product', compact('id'));
})->name('frontend_product',);

// Route::get('/user/all', function () {
//     return view('user');
// })->name('frontend_user');


Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);
