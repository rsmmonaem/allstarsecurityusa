<?php

namespace App\Models;

use App\Models\Page;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SeoPage extends Model
{
    protected $fillable = ['title', 'description', 'keywords'];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}

