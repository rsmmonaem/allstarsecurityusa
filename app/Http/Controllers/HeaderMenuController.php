<?php

namespace App\Http\Controllers;

use App\Models\HeaderMenu;
use App\Models\PageCategory;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HeaderMenuController extends Controller
{
    public function index()
    {
        $headerMenus = HeaderMenu::all();
        return view('header-menus.index', compact('headerMenus'));
    }

    public function create()
    {
        $pageCategories = PageCategory::all();
        return view('header-menus.create', compact('pageCategories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'page_category_id' => 'required|integer|exists:page_categories,id',
            'isactive' => 'required|string|in:show,hide',
        ]);

        HeaderMenu::create($request->all());

        return redirect()->route('header-menus.index')->with('success', 'Header Menu created successfully.');
    }

    public function edit(HeaderMenu $headerMenu)
    {
        $pageCategories = PageCategory::all();
        return view('header-menus.edit', compact('headerMenu', 'pageCategories'));
    }

    public function update(Request $request, HeaderMenu $headerMenu)
    {
        $request->validate([
            'page_category_id' => 'required|integer|exists:page_categories,id',
            'isactive' => 'required|string|in:show,hide',
        ]);

        $headerMenu->update($request->all());

        return redirect()->route('header-menus.index')->with('success', 'Header Menu updated successfully.');
    }

    public function destroy(HeaderMenu $headerMenu)
    {
        $headerMenu->delete();

        return redirect()->route('header-menus.index')->with('success', 'Header Menu deleted successfully.');
    }
}
