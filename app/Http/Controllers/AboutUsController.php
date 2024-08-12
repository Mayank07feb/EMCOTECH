<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\AboutCategory; 
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutUsEntries = AboutUs::all();
        return view('dashboard.about.index', compact('aboutUsEntries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = AboutCategory::all();
        return view('about.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:about_categories,id',
        ]);

        AboutUs::create($request->all());

        return redirect()->route('about.index')->with('success', 'About Us entry created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AboutUs $aboutUs)
    {
        $categories = AboutCategory::all();
        return view('about.edit', compact('aboutUs', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AboutUs $aboutUs)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:about_categories,id',
        ]);

        $aboutUs->update($request->all());

        return redirect()->route('about.index')->with('success', 'About Us entry updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutUs $aboutUs)
    {
        $aboutUs->delete();

        return redirect()->route('about.index')->with('success', 'About Us entry deleted successfully.');
    }
}
