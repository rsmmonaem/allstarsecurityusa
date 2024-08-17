<?php

namespace App\Models;

use App\Models\Page;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PageAdditionalInfo extends Model
{
    use HasFactory;

    protected $fillable = ['page_id', 'key', 'value'];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
