<?php

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
});
// End Of Admin Routes

Route::get('/', function()  {
    return view('welcome');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
