<?php

namespace App\Http\Controllers;

use App\Models\HeaderMenu;
use App\Models\PageCategory;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Validation\Rule;


class HeaderMenuController extends Controller
{
    public function index()
    {
        $headerMenus = HeaderMenu::with(['page', 'pageCategory'])->get();
        return $headerMenus;
        //return view('super-admin.header-menus.index', compact('headerMenus'));
    }

    public function create()
    {
        $pageCategories = PageCategory::all();
        return view('super-admin.header-menus.create', compact('pageCategories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'page_category_id' => 'required|integer|exists:page_categories,id|unique:header_menus,page_category_id',
            'isactive' => 'required|string|in:show,hide',
        ]);
    
        try {
            HeaderMenu::create($request->all());
            return redirect()->route('header-menus.index')->with('success', 'Header Menu created successfully.');
        } catch (QueryException $e) {
            // Check if the exception is a unique constraint violation
            if ($e->getCode() == '23000') {
                return redirect()->back()->withErrors(['page_category_id' => 'This page category ID already exists.']);
            }
            // Handle other exceptions or rethrow
            return redirect()->back()->withErrors(['error' => 'An unexpected error occurred.']);
        }
    }
    

    public function edit(HeaderMenu $headerMenu)
    {
        $pageCategories = PageCategory::all();
        return view('super-admin.header-menus.edit', compact('headerMenu', 'pageCategories'));
    }

    public function update(Request $request, HeaderMenu $headerMenu)
    {
        $request->validate([
            'page_category_id' => [
                'required',
                'integer',
                'exists:page_categories,id',
                Rule::unique('header_menus', 'page_category_id')->ignore($headerMenu->id)
            ],
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
