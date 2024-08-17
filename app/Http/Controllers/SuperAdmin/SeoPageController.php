<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\SeoPage;
use Illuminate\Http\Request;

class SeoPageController extends Controller
{
    public function index()
    {
        $seoPages = SeoPage::all();
        return view('super-admin.seo-pages.index', compact('seoPages'));
    }

    public function create()
    {
        return view('super-admin.seo-pages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'slug' => 'required|string|max:255|unique:seo_pages,slug',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'keywords' => 'required|string',
        ]);

        SeoPage::create($request->all());

        return redirect()->route('seo-pages.index')->with('success', 'SEO Page created successfully.');
    }

    public function edit(SeoPage $seoPage)
    {
        return view('super-admin.seo-pages.edit', compact('seoPage'));
    }

    public function update(Request $request, SeoPage $seoPage)
    {
        $request->validate([
            'slug' => 'required|string|max:255|unique:seo_pages,slug,' . $seoPage->id,
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'keywords' => 'required|string',
        ]);

        $seoPage->update($request->all());

        return redirect()->route('seo-pages.index')->with('success', 'SEO Page updated successfully.');
    }

    public function destroy(SeoPage $seoPage)
    {
        $seoPage->delete();

        return redirect()->route('seo-pages.index')->with('success', 'SEO Page deleted successfully.');
    }
}
