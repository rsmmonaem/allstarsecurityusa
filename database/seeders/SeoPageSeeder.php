<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SeoPage;

class SeoPageSeeder extends Seeder
{
    public function run()
    {
        SeoPage::create([
            'slug' => 'sample-blog-post',
            'title' => 'Sample Blog Post',
            'description' => 'This is a sample blog post description.',
            'keywords' => 'sample, blog, post',
        ]);

        SeoPage::create([
            'slug' => 'sample-product-page',
            'title' => 'Sample Product Page',
            'description' => 'This is a sample product page description.',
            'keywords' => 'sample, product, page',
        ]);
    }
}
