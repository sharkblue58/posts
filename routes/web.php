<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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
Route::controller(PostController::class)->group(function(){

    Route::get('post/create','createPost')->name('post.create');
    Route::get('post/edit/{id}','editPost')->name('post.edit');
    Route::put('post/update/{id}','updatePost')->name('post.update');
    Route::get('post/delete/{id}','deletePost')->name('post.delete');
    Route::get('post/deleteAll','deleteAllPosts')->name('post.delete.all');
    Route::get('post/deleteAllperminantly','deleteAllPostsPerminantly')->name('post.delete.all.perminantly');
    Route::post('post/insert', 'insertPostData')->name('post.insert');
    Route::get('/','showPost')->name('post.show');

});

