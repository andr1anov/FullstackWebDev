<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    // TASK 3. Implement a route with any parameter;
    public function showPage($slug)
    {
        return view($slug);
    }

    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function contact()
    {
        return view('contact');
    }

    public function portfolio()
    {
        return view('portfolio');
    }
}