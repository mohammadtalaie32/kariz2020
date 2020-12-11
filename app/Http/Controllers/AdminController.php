<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Book;
use App\Models\Feed;
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

    public function books() {
        $books = Book::all();
        $book_count = Book::count();
        return view('admin.books' , ['books' => $books , 'book_count' => $book_count]);
    }

    public function feeds() {
        $feeds = Feed::all();
        $feed_count = Feed::count();
        return view('admin.feeds' , ['feeds' => $feeds , 'feed_count' => $feed_count]);
    }
}
