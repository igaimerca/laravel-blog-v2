<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
  return redirect('posts');
});

Auth::routes();

// Posts 
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/my_posts', [PostController::class, 'my_posts'])->name('posts.my_posts');
Route::get('/posts/show/{uuid}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/edit/{uuid?}', [PostController::class, 'edit'])->name('posts.edit')->middleware('auth');
Route::post('/posts/edit/{uuid?}', [PostController::class, 'edit'])->middleware('auth');
Route::get('/posts/delete/{uuid}', [PostController::class, 'delete'])->name('posts.delete');

// Comments
Route::post("/comments/edit/{post_uuid?}", [CommentController::class, 'edit'])->name('comments.edit')->middleware('auth');