<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\PageCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageCategoryController extends Controller
{
    public function index()
    {
        $pageCategories = PageCategory::all();
        return view('super-admin.page-categories.index', compact('pageCategories'));
    }

    public function create()
    {
        return view('super-admin.page-categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:page_categories,slug',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // Validation for image
        ]);

        // Handle the image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('images/page_categories', 'public');
        }

        PageCategory::create([
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
            'image' => $imagePath,
        ]);

        return redirect()->route('page-categories.index')->with('success', 'Page Category created successfully.');
    }

    public function edit(PageCategory $pageCategory)
    {
        return view('super-admin.page-categories.edit', compact('pageCategory'));
    }

    public function update(Request $request, PageCategory $pageCategory)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:page_categories,slug,' . $pageCategory->id,
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // Validation for image
        ]);

        // Handle the image upload
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($pageCategory->image) {
                Storage::disk('public')->delete($pageCategory->image);
            }

            $image = $request->file('image');
            $imagePath = $image->store('images/page_categories', 'public');
            $pageCategory->image = $imagePath;
        }

        $pageCategory->update([
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
        ]);

        return redirect()->route('page-categories.index')->with('success', 'Page Category updated successfully.');
    }

    public function destroy(PageCategory $pageCategory)
    {
        // Delete the image file if it exists
        if ($pageCategory->image) {
            Storage::disk('public')->delete($pageCategory->image);
        }

        $pageCategory->delete();

        return redirect()->route('page-categories.index')->with('success', 'Page Category deleted successfully.');
    }
}
