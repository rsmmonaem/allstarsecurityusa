<?php

namespace App\Models;

use App\Models\Page;
use App\Models\SeoPage;
use App\Models\PageCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Page extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'slug', 'seo_id', 'page_category_id', 'parent_category_id', 'child_page_id', 'page_additional_info'];
    public function seo()
    {
        return $this->belongsTo(SeoPage::class, 'seo_id');
    }

    public function category()
    {
        return $this->belongsTo(PageCategory::class, 'page_category_id');
    }

    public function parentCategory()
    {
        return $this->belongsTo(PageCategory::class, 'parent_category_id');
    }

    public function childPage()
    {
        return $this->belongsTo(Page::class, 'child_page_id');
    }
}

