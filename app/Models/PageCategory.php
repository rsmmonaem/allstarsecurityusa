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
        return $this->hasMany(Page::class);
    }
}
