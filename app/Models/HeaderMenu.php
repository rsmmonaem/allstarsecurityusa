<?php

namespace App\Models;

use App\Models\PageCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HeaderMenu extends Model
{
    use HasFactory;

    protected $fillable = ['page_category_id', 'isactive'];
    public function page()
    {
        return $this->belongsTo(Page::class, 'page_category_id', 'id');
    }
    
    public function pageCategory()
    {
        return $this->belongsTo(PageCategory::class, 'page_category_id');
    }
}


