<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Show the become an instructor page.
     *
     * @return \Illuminate\View\View
     */
    public function become_an_instructor()
    {
        return view('frontend.become_an_instructor');
    }
}
