<?php

namespace App\Http\Controllers;

use App\Models\SeoPage;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

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
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'keywords' => 'nullable|string',
        ]);

        if (SeoPage::create($request->all())) {
            return redirect()->route('seo-pages.index')->with('success', 'SEO Page created successfully.');
        }else{
            return redirect()->route('seo-pages.index')->with('error', 'SEO Page not created.');
        }

    }

    public function edit(SeoPage $seoPage)
    {
        return view('super-admin.seo-pages.edit', compact('seoPage'));
    }

    public function update(Request $request, SeoPage $seoPage)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'keywords' => 'nullable|string',
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
