<?php
namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\SeoPage;
use App\Models\PageCategory;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::All();
        $pageCategories = PageCategory::all();
        $SeoPage = SeoPage::all();
        return view('super-admin.pages.index', compact('pages', 'pageCategories', 'SeoPage'));
    }

    public function create()
    {
        $pageCategories = PageCategory::all();
        $pages = Page::all();
        $SeoPage = SeoPage::all();
        return view('super-admin.pages.create', compact('pageCategories', 'pages', 'SeoPage'));
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'slug' => 'required|string|max:255|unique:pages',
        //     'seo_id' => 'nullable|string|max:255',
        //     'page_category_id' => 'nullable|exists:page_categories,id',
        //     'parent_category_id' => 'nullable|exists:page_categories,id',
        //     'child_page_id' => 'nullable|exists:pages,id',
        // ]);

        Page::create($request->all());

        return redirect()->route('pages.index')->with('success', 'Page created successfully.');
    }

    public function edit(Page $page)
    {
        $page = Page::find($page->id);
        $pages = Page::all();
        $pageCategories = PageCategory::all();
        $SeoPage = SeoPage::all();
        return view('super-admin.pages.edit', compact('page', 'pages', 'pageCategories', 'SeoPage'));
    }

    public function update(Request $request, Page $page)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:pages,slug,' . $page->id,
            'seo_id' => 'nullable|string|max:255',
            'page_category_id' => 'nullable|exists:page_categories,id',
            'parent_category_id' => 'nullable|exists:page_categories,id',
            'child_page_id' => 'nullable|exists:pages,id',
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
