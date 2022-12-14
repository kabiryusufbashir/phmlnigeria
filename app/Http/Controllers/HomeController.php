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

    public function whyphml()
    {
        $page_title = 'services';

        return view('whyphml', compact('page_title'));

    }

    public function ourofferings()
    {
        $page_title = 'services';

        return view('ourofferings', compact('page_title'));

    }

    public function enlightment()
    {

        $page_title = 'services';

        return view('enlightment', compact('page_title'));

    }

    public function faqs()
    {

        $page_title = 'home';

        return view('faqs', compact('page_title'));

    }

    public function downloads()
    {

        $page_title = 'media';

        return view('downloads', compact('page_title'));

    }

    public function contactUs()
    {

        $page_title = 'contact-us';

        return view('contact', compact('page_title'));

    }

}
