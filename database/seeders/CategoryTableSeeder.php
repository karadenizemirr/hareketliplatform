<?php

namespace Database\Seeders;

use App\Models\ModelsCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $faker)
    {
        ModelsCategory::truncate();
        for($i=0; $i<10; $i++){
            $name = $faker->sentence(1);
            ModelsCategory::create([
                'name'=> $name,
                'slug'=> str_slug($name)
            ]);
        }

    }
}
