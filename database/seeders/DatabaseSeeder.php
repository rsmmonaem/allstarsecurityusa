<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\PageSeeder;
use Database\Seeders\SeoPageSeeder;
use Database\Seeders\CustomerSeeder;
use Database\Seeders\RoleTableSeeder;
use Database\Seeders\UserTableSeeder;
use Database\Seeders\PageCategorySeeder;
use Database\Seeders\PageAdditionalInfoSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            RoleTableSeeder::class,
            UserTableSeeder::class,
            CustomerSeeder::class,
            ContactTableSeeder::class,
            // PageCategorySeeder::class,
            // PageSeeder::class,
            // SeoPageSeeder::class,
            // PageAdditionalInfoSeeder::class,
        ]);
    }
}
