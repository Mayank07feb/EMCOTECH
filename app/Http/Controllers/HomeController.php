<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front_pages.index');
    }

    public function about()
    {
        $aboutUsEntries = AboutUs::all();
        return view('front_pages.about', compact('aboutUsEntries'));
    }

    public function services()
    {
        return view('front_pages.service');
    }

    public function products()
    {
        return view('front_pages.product');
    }

    public function blogs(Category $category = null)
    {
        if($category == null){
            $blogs = Blog::all();
        }else{
            $blogs = $category->blogs;
        }
        $categories = Category::all();
        return view('front_pages.blog', compact('blogs', 'categories'));
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

    public function dashboard()
    {
        return view('dashboard.dashboard');
    }

    public function blogdetails()
    {
        return view('front_pages.blogdetails');
    }
}
