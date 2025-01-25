<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = ['Coffee', 'Frappuccino', 'Lemonade', 'Milk Shake', 'Hot & iced tea'];
        foreach ($objs as $obj){
            Category::create([
                'name' => $obj,
                'slug' => str($obj)->slug()
            ]);
        }

    }
}
