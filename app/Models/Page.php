<?php

namespace App\Models;

use App\Models\PageCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Page extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'page_category_id'];

    public function category()
    {
        return $this->belongsTo(PageCategory::class, 'page_category_id');
    }

    public function seo()
    {
        return $this->hasOne(SeoPage::class, 'slug', 'slug');
    }

    public function additionalInfo()
    {
        return $this->hasMany(PageAdditionalInfo::class);
    }
}
