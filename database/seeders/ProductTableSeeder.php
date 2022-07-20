<?php

namespace Database\Seeders;

use App\Models\ModelsProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator;


class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $faker)
    {
        ModelsProduct::truncate();

        for ($i=0; $i<30; $i++){
            $name = $faker->sentence(2);

            ModelsProduct::create([
               'name' => $name,
                'slug' => str_slug($name),
                'description' => $faker->sentence(20),
                'technique_detail' => $faker->sentence(50),
                'platform_detail' => $faker->sentence(50),
                'safety_features' => $faker->sentence(50),
                'configuration' => $faker->sentence(50),
                'components' => $faker->sentence(50),
                'other_detail' => $faker->sentence(50)
            ]);
        }
    }
}
