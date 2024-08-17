<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\PageCategory;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        return view('super-admin.pages.index', compact('pages'));
    }

    public function create()
    {
        $pageCategories = PageCategory::all();
        return view('super-admin.pages.create', compact('pageCategories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:pages,slug',
            'page_category' => 'required|string|max:255|exists:page_categories,slug',
            'page_additional_info' => 'nullable|string',
        ]);

        Page::create($request->all());

        return redirect()->route('pages.index')->with('success', 'Page created successfully.');
    }

    public function edit(Page $page)
    {
        $pageCategories = PageCategory::all();
        return view('super-admin.pages.edit', compact('page', 'pageCategories'));
    }

    public function update(Request $request, Page $page)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:pages,slug,' . $page->id,
            'page_category' => 'required|string|max:255|exists:page_categories,slug',
            'page_additional_info' => 'nullable|string',
        ]);

        $page->update($request->all());

        return redirect()->route('pages.index')->with('success', 'Page updated successfully.');
    }

    public function destroy(Page $page)
    {
        $page->delete();

        return redirect()->route('pages.index')->with('success', 'Page deleted successfully.');
    }
}
