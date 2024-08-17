<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;

class PageSeeder extends Seeder
{
    public function run()
    {
        Page::create([
            'name' => 'Sample Blog Post',
            'slug' => 'sample-blog-post',
            'page_category_id' => 1, // Assuming 'Blog' category ID is 1
        ]);

        Page::create([
            'name' => 'Sample Product Page',
            'slug' => 'sample-product-page',
            'page_category_id' => 2, // Assuming 'Product' category ID is 2
        ]);
    }
}
