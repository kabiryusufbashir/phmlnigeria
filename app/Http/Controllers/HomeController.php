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

    public function management()
    {
        $page_title = 'about-us';

        return view('management', compact('page_title'));

    }

    public function departments()
    {
        $page_title = 'about-us';

        return view('departments', compact('page_title'));

    }

    public function awards()
    {
        $page_title = 'about-us';

        return view('awards', compact('page_title'));

    }

    public function mds()
    {
        $page_title = 'about-us';

        return view('mds', compact('page_title'));

    }

}
