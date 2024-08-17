<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PageCategory;

class PageCategorySeeder extends Seeder
{
    public function run()
    {
        PageCategory::create([
            'name' => 'Blog',
            'slug' => 'blog',
        ]);

        PageCategory::create([
            'name' => 'Product',
            'slug' => 'product',
        ]);
    }
}
