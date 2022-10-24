<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //main function
    public function index()
    {
        return view('blog');
    }
}
