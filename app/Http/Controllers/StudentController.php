<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Student All Courses
     */
    public function all_courses()
    {
        return view('student.my_learnings.all_courses');
    }

    /**
     * Student Course Collections
     */
    public function collections()
    {
        return view('student.my_learnings.collections');
    }

    /**
     * Student Course Wishlist
     */
    public function wishlist()
    {
        return view('student.my_learnings.wishlist');
    }
}
