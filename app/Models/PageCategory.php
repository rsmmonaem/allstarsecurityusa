<?php

namespace App\Models;

use App\Models\Page;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PageCategory extends Model
{
    protected $fillable = ['name', 'slug', 'image'];

    public function pages()
    {
        return $this->hasMany(Page::class, 'page_category_id', 'id');
    }

    public function header_menu()
    {
        return $this->hasOne(HeaderMenu::class, 'page_category_id', 'id');
    }
}
