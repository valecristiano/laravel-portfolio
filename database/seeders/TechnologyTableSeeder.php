<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $technologies=['Php', 'Laravel', 'Express', 'Html', 'Css'];

         foreach($technologies as $technology) {
            $newTechnology = New Technology();

            $newTechnology->name = $technology;
            $newTechnology->description = $faker->text();
            
            $newTechnology->save();

    }
}
}