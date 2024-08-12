<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('dashboard.category.index', compact('categories'));
    }

    public function create()
    {
        return view('dashboard.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'mimes:png,jpg,jpeg',
        ]);

        $category = new Category();
        $category->title = $request->title;
        $category->description = $request->description;

        if ($request->file('image')) {
            $file = $request->file('image')->store('public/category/images');
            $category->image = str_replace('public/', '', $file);
        }

        $category->save();

        return redirect()->route('category.index')->with('success', 'category post created successfully.');
    }

    public function edit(Category $category)
    {
        return view('dashboard.category.edit', compact('category'));
    }

    public function update(Category $category, Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'mimes:png,jpg,jpeg',
        ]);
        $category->title = $request->title;
        $category->description = $request->description;
        if ($request->file('image')) {
            $file = $request->file('image')->store('public/category/images');
            $category->image = str_replace('public/', '', $file);
        }
        $category->save();
        return redirect('category/index')->with('success', 'Updated successfully');
    }

    public function delete(Category $category)
    {
        if ($category->image) {
            $filePath = storage_path('app/public/' . $category->image);
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }

        $category->delete();

        return redirect()->route('category.index')->with('success', 'category post deleted successfully.');
    }
}
