<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for($i=0; $i<10; $i++){
            $newCategory = new Category();
            $newCategory->name = $faker->sentence(2);
            $newCategory->slug = Str::slug($newCategory->name); 
            $newCategory->save();
        }

    }
}
