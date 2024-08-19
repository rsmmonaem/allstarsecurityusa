<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Models\PageAdditionalInfo;
use Illuminate\Routing\Controller;

class PageAdditionalInfoController extends Controller
{
    public function index()
    {
        $additionalInfos = PageAdditionalInfo::with('page')->get();
        return view('super-admin.page-additional-info.index', compact('additionalInfos'));
    }

    public function create()
    {
        $pages = Page::all();
        return view('super-admin.page-additional-info.create', compact('pages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'page_id' => 'required|exists:pages,id',
            'key_type' => 'required|string',
            'key' => 'required|string',
            'value' => 'required|string',
        ]);

        PageAdditionalInfo::create($request->all());

        return redirect()->route('page-additional-info.index')->with('success', 'Additional Info created successfully.');
    }

    public function edit(PageAdditionalInfo $pageAdditionalInfo)
    {
        $pages = Page::all();
        $pageAdditionalInfo = PageAdditionalInfo::find($pageAdditionalInfo->id);
        return view('super-admin.page-additional-info.edit', compact('pageAdditionalInfo', 'pages'));
    }

    public function update(Request $request, PageAdditionalInfo $pageAdditionalInfo)
    {
        $request->validate([
            'page_id' => 'required|exists:pages,id',
            'key_type' => 'required|string',
            'key' => 'required|string',
            'value' => 'required|string',
        ]);

        $pageAdditionalInfo->update($request->all());

        return redirect()->route('page-additional-info.index')->with('success', 'Additional Info updated successfully.');
    }

    public function destroy(PageAdditionalInfo $pageAdditionalInfo)
    {
        $pageAdditionalInfo->delete();

        return redirect()->route('page-additional-info.index')->with('success', 'Additional Info deleted successfully.');
    }
}
