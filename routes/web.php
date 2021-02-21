<?php

use App\Http\Controllers\AdminBookController;
use App\Http\Controllers\AdminFeedController;
use App\Http\Controllers\AdminUserController;
use App\Http\Middleware\IsAdminMiddleware;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminCourseController;

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


// Admin Routes Here!
Route::middleware(['IsAdminMiddleware'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('admin/courses', [AdminController::class, 'courses']);
    Route::get('admin/books', [AdminController::class, 'books']);
    Route::get('admin/feeds', [AdminController::class, 'feeds']);
    Route::any('/admin/courses/create', [AdminCourseController::class, 'create']);
    Route::any('/admin/courses/store', [AdminCourseController::class, 'store']);
    Route::any('/admin/courses/{id}/edit', [AdminCourseController::class, 'edit']);
    Route::any('/admin/courses/update/{id}', [AdminCourseController::class, 'update']);
    Route::any('/admin/courses/delete/{id}', [AdminCourseController::class, 'destroy']);
    Route::any('/admin/courses/searched', [AdminCourseController::class, 'search']);
    Route::any('/admin/books/create',[AdminBookController::class,'create']);
    Route::any('/admin/books/store',[AdminBookController::class,'store']);
    Route::any('/admin/books/{id}/edit',[AdminBookController::class,'edit']);
    Route::any('/admin/books/update/{id}',[AdminBookController::class,'update']);
    Route::any('/admin/books/delete/{id}',[AdminBookController::class,'destroy']);
    Route::any('/admin/books/searched',[AdminBookController::class,'search']);
    Route::any('/admin/feeds/create',[AdminFeedController::class,'create']);
    Route::any('/admin/feeds/store',[AdminFeedController::class,'store']);
    Route::any('/admin/feeds/{id}/edit',[AdminFeedController::class,'edit']);
    Route::any('/admin/feeds/update/{id}',[AdminFeedController::class,'update']);
    Route::any('/admin/feeds/delete/{id}',[AdminFeedController::class,'destroy']);
    Route::any('/admin/feeds/searched',[AdminFeedController::class,'search']);
    Route::any("/admin/add_users",[AdminUserController::class , "index"]);
    Route::any("/admin/add_users/create",[AdminUserController::class , "create"]);
    Route::any("/admin/add_users/store",[AdminUserController::class , "store"]);
    Route::any("/admin/add_users/{id}/edit",[AdminUserController::class , "edit"]);
    Route::any("/admin/add_users/update/{id}" , [AdminUserController::class , "update"]);
    Route::any("/admin/add_users/delete/{id}");
    Route::any("/admin/add_users/searched");

});
// End Of Admin Routes


Route::get('/', function()  {
    return view('welcome');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
