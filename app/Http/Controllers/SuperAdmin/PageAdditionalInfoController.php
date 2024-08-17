<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\PageAdditionalInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageAdditionalInfoController extends Controller
{
    public function index()
    {
        $additionalInfos = PageAdditionalInfo::with('page')->get();
        return view('super-admin.page-additional-info.index', compact('additionalInfos'));
    }

    public function create()
    {
        $pages = Page::all(); // Fetch pages to populate the dropdown
        return view('super-admin.page-additional-info.create', compact('pages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'page_id' => 'required|exists:pages,id',
            'key' => 'required|string|max:255|in:image,text', // Ensure key is either 'image' or 'text'
            'value' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Handle image uploads
        ]);

        $value = $request->input('value');

        if ($request->input('key') === 'image' && $request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/page_additional_info', 'public');
            $value = $imagePath;
        }

        PageAdditionalInfo::create([
            'page_id' => $request->input('page_id'),
            'key' => $request->input('key'),
            'value' => $value,
        ]);

        return redirect()->route('page-additional-info.index')->with('success', 'Additional Info created successfully.');
    }

    public function edit(PageAdditionalInfo $pageAdditionalInfo)
    {
        $pages = Page::all(); // Fetch pages to populate the dropdown
        return view('super-admin.page-additional-info.edit', compact('pageAdditionalInfo', 'pages'));
    }

    public function update(Request $request, PageAdditionalInfo $pageAdditionalInfo)
    {
        $request->validate([
            'page_id' => 'required|exists:pages,id',
            'key' => 'required|string|max:255|in:image,text',
            'value' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $value = $request->input('value');

        if ($request->input('key') === 'image' && $request->hasFile('image')) {
            // Delete the old image if needed
            if ($pageAdditionalInfo->value && Storage::exists($pageAdditionalInfo->value)) {
                Storage::delete($pageAdditionalInfo->value);
            }
            $imagePath = $request->file('image')->store('images/page_additional_info', 'public');
            $value = $imagePath;
        }

        $pageAdditionalInfo->update([
            'page_id' => $request->input('page_id'),
            'key' => $request->input('key'),
            'value' => $value,
        ]);

        return redirect()->route('page-additional-info.index')->with('success', 'Additional Info updated successfully.');
    }

    public function destroy(PageAdditionalInfo $pageAdditionalInfo)
    {
        // Delete the image if needed
        if ($pageAdditionalInfo->key === 'image' && $pageAdditionalInfo->value && Storage::exists($pageAdditionalInfo->value)) {
            Storage::delete($pageAdditionalInfo->value);
        }

        $pageAdditionalInfo->delete();

        return redirect()->route('page-additional-info.index')->with('success', 'Additional Info deleted successfully.');
    }
}
