<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Product;
use App\Models\SeoPage;

use App\Models\Category;
use App\Models\PageCategory;
use Illuminate\Http\Request;
use App\Models\PageAdditionalInfo;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.home.index');
    }

    public function contact_us()
    {
        $data = PageAdditionalInfo::where('key', 'contact_us')->value('value');
        return view('frontend.pages.contact_us', compact('data'));
    }

    public function master_page($category_id, $page_id)
    {
        $category_id = (int) $category_id;
        $page_id = (int) $page_id;
    
        // Fetch additional info
        $data = PageAdditionalInfo::where('page_id', $page_id)
            ->where('key', 'content')
            ->value('value');
    
        // Fetch category, page, and SEO page
        $category = PageCategory::find($category_id);
        $page = Page::find($page_id);
        $SeoPage = SeoPage::find($page_id);
    
        // Handle missing records
        if (!$category || !$page || !$SeoPage) {
            return redirect()->back()->with('error', 'Content not found.');
        }
    
        return view('frontend.pages.master', compact('data', 'category', 'page', 'SeoPage'));
    }
    
    public function edit_contact_us()
    {
        $data = PageAdditionalInfo::where('key', 'contact_us')->value('value');
        return view('frontend.pages.edit_contact_us', compact('data'));
    }
    
    public function update_contact_us(Request $request )
    {
        // Validate the incoming request
        $request->validate([
            'contact_us_content' => 'required|string',
        ]);
    
        // Clean or sanitize the input if necessary
        $contactUsContent = htmlspecialchars($request->input('contact_us_content'), ENT_QUOTES, 'UTF-8');
    
        try {
            // Find or create the record
            $data = PageAdditionalInfo::updateOrCreate(
                ['key' => 'contact_us'],
                ['value' => $contactUsContent]
            );
    
            // Redirect back with success message
            return redirect()->route('admin.edit_contact_us')
                ->with('success', 'Content updated successfully!');
        } catch (\Exception $e) {
            // Log the error and redirect back with an error message
            \Log::error('Failed to update contact us content: ' . $e->getMessage());
            return redirect()->route('admin.edit_contact_us')
                ->with('error', 'Failed to update content.');
        }
    }
    
    
    
}
