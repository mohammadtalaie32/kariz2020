<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;



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

Route::get('/', function () {
    return [
        'result' => true,
    ];

});

Route::get('/admin',function (){
    return "you are admin";
})->middleware('IsAdminMiddleware');



Route::get('/teacher',function (){
    return "you are teacher";
})->middleware('IsTeacherMiddleware');



Route::get('/student',function (){
    return "you are student";
})->middleware('IsStudentMiddleware');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
