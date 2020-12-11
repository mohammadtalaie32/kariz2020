<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class AdminController extends Controller
{
    public function index() {
        return view('admin.admin_index');
    }

    public function courses() {
        $courses = Course::all();
        $course_count = Course::count();
        return view('admin.courses' , ['courses' => $courses , 'course_count' => $course_count]);
    }
}
