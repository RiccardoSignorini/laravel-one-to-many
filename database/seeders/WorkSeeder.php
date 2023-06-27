<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Work;
use Faker\Generator as Faker;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for($i=0; $i<10; $i++){
            $newWork = new Work();
            $newWork->title = $faker->sentence(1);
            $newWork->lenguages = $faker->randomElement(['Html', 'Css', 'Javascript', 'Vue', 'Php', 'Laravel']);
            $newWork->description = $faker->text(100);
            $newWork->image = $faker->imageUrl(640, 480);
            $newWork->creation_date = $faker->dateTimeBetween('08-02-2023', '30-06-2023');
            $newWork->save();
        }

    }
}
