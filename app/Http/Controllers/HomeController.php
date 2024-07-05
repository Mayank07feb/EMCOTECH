<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front_pages.index');
    }

    public function about()
    {
        return view('front_pages.about');
    }

    public function services()
    {
        return view('front_pages.service');
    }

    public function products()
    {
        return view('front_pages.product');
    }

    public function team()
    {
        return view('front_pages.team');
    }

    public function contact()
    {
        return view('front_pages.contact');
    }

    public function servicedetails()
    {
        return view('front_pages.service_detail');
    }

    public function readmore()
    {
        return view('front_pages.reademore');
    }
}
