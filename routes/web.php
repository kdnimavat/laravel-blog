<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\dashboardController;
use App\Http\Controllers\Admin\catagoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\userController;
use App\Http\Controllers\Frontend\frontendController;
use App\Http\Controllers\Frontend\CommentController;
use Egulias\EmailValidator\Parser\CommentStrategy\CommentStrategy;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [frontendController::class, 'index'])->name('index');

Route::get('tutorial/{category_slug}', [frontendController::class, 'viewCategoryPost']);
Route::get('tutorial/{category_slug}/{post_slug}', [frontendController::class, 'viewPost']);

//Comments
Route::post('/comments', [CommentController::class, 'store']);
Route::post('/delete-comment', [CommentController::class, 'destroy']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index']);
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', [dashboardController::class, 'index']);

    Route::get('/category', [catagoryController::class, 'index']);

    Route::get('/add-category', [catagoryController::class, 'create']);
    Route::post('/add-category', [catagoryController::class, 'store']);

    Route::get('/edit-category/{category_id}', [catagoryController::class, 'edit']);
    Route::put('/update-category/{category_id}', [catagoryController::class, 'update']);

    Route::get('/delete-category/{category_id}', [catagoryController::class, 'destroy']);

    Route::get('/post', [PostController::class, 'index'])->name('post');

    Route::get('/add-post', [PostController::class, 'create']);
    Route::post('/add-post', [PostController::class, 'store']);

    Route::get('/edit-post/{post_id}', [PostController::class, 'edit']);
    Route::put('/update-post/{post_id}', [PostController::class, 'update']);

    Route::get('/delete-post/{post_id}', [PostController::class, 'destroy']);

    Route::get('/users', [userController::class, 'index']);

    Route::get('/edit-user/{user_id}', [userController::class, 'edit']);
    Route::put('/update-user/{user_id}', [userController::class, 'update']);

    Route::get('/delete-user/{user_id}', [userController::class, 'destroy']);
});

// Route::get('/blog', [PostController::class, 'show'])->name('blog');

Route::view('/about', 'about');
Route::view('/contact', 'contact');

// Route::view('/add', 'blog.addBlog');
// Route::post('/add', [BlogController::class, 'addPost']);

// Route::get('/updateBlog/{id}', [BlogController::class, 'updateBlog']);
// Route::post('/UpdateBlog', [BlogController::class, 'update'])->name('update');
