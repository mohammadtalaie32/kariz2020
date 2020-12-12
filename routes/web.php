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
Route::get('/admin' , [AdminController::class , 'index'])->middleware(IsAdminMiddleware::class);
Route::get('admin/courses', [AdminController::class, 'courses'])->middleware(IsAdminMiddleware::class);
Route::get('admin/books' , [AdminController::class , 'books'])->middleware(IsAdminMiddleware::class);
Route::get('admin/feeds' , [AdminController::class , 'feeds'])->middleware(IsAdminMiddleware::class);
Route::get('/admin/courses/create',[AdminCourseController::class , 'create'])->middleware(IsAdminMiddleware::class);
Route::post('/admin/courses/store',[AdminCourseController::class , 'store'])->middleware(IsAdminMiddleware::class);
Route::any('/admin/courses/{id}/edit',[AdminCourseController::class , 'edit'])->middleware(IsAdminMiddleware::class);
Route::any('/admin/courses/update/{id}',[AdminCourseController::class,'update'])->middleware(IsAdminMiddleware::class);
Route::any('/admin/courses/delete/{id}',[AdminCourseController::class , 'destroy'])->middleware(IsAdminMiddleware::class);


// End Of Admin Routes

Route::get('/', function()  {
    return view('welcome');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
