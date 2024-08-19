<?php

namespace App\Http\Controllers;

use App\Models\PageCategory;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

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
            'slug' => 'required|string|unique:page_categories,slug',
            'image' => 'nullable|string',
        ]);

        PageCategory::create($request->all());

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
            'slug' => 'required|string|unique:page_categories,slug,' . $pageCategory->id,
            'image' => 'nullable|string',
        ]);

        $pageCategory->update($request->all());

        return redirect()->route('page-categories.index')->with('success', 'Page Category updated successfully.');
    }

    public function destroy(PageCategory $pageCategory)
    {
        $pageCategory->delete();

        return redirect()->route('page-categories.index')->with('success', 'Page Category deleted successfully.');
    }
}


