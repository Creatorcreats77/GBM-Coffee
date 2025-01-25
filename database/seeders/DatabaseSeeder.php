<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\CategoriesSeeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\ClassesSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call(class: [
            CategoriesSeeder::class,
            ProductSeeder::class,
            ClassesSeeder::class,
            OrderSeeder::class,
        ]);

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);


    }
}
