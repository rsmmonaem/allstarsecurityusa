<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PageAdditionalInfo;

class PageAdditionalInfoSeeder extends Seeder
{
    public function run()
    {
        PageAdditionalInfo::create([
            'page_id' => 1,
            'key' => 'author',
            'value' => 'John Doe',
        ]);

        PageAdditionalInfo::create([
            'page_id' => 2,
            'key' => 'price',
            'value' => '$100',
        ]);
    }
}
