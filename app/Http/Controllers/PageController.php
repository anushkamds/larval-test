<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        $people = ['Talor', 'Man'];
        return view('welcome', compact('people'));

    }

    public function about()
    {
        return view('about');

    }
}
