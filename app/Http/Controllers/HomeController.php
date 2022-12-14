<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $page_title = 'home';

        return view('welcome', compact('page_title'));
    }

    public function about()
    {
        $page_title = 'about-us';

        return view('about', compact('page_title'));

    }

    public function board()
    {
        $page_title = 'about-us';

        return view('board', compact('page_title'));

    }

}
