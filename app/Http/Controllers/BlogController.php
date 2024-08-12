<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        
        $blogs = Blog::all();
        return view('dashboard.blog.index', compact('blogs'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('dashboard.blog.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'mimes:png,jpg,jpeg',
        ]);

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->category_id = $request->category_id;

        if ($request->file('image')) {
            $file = $request->file('image')->store('public/blog/images');
            $blog->image = str_replace('public/', '', $file);
        }

        $blog->save();

        return redirect()->route('blog.index')->with('success', 'Blog post created successfully.');
    }

    public function delete(Blog $blog)
    {
        if ($blog->image) {
            $filePath = storage_path('app/public/' . $blog->image);
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }

        $blog->delete();

        return redirect()->route('blog.index')->with('success', 'Blog post deleted successfully.');
    }

    public function edit(Blog $blog)
    {
        $categories = Category::all();
        return view('dashboard.blog.edit', compact('blog', 'categories'));
    }

    public function update(Blog $blog, Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'mimes:png,jpg,jpeg',
        ]);
        $blog->title = $request->title;
        $blog->description = $request->description;

        if ($request->file('image')) {
            $file = $request->file('image')->store('public/blog/images');
            $blog->image = str_replace('public/', '', $file);
        }
        $blog->category_id = $request->category_id;
        $blog->save();
        return redirect('blog/index')->with('success', 'Updated successfully');
    }

    //     public function category(){
    //         return view('dashboard.blog.category');
    //     }
}
