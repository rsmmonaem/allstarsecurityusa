<?php

namespace App\Models;

use App\Models\PageCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HeaderMenu extends Model
{
    public function category()
    {
        return $this->belongsTo(PageCategory::class, 'page_category_id');
    }
}


