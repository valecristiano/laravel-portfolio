<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i=0;$i<4;$i++) {
            $newProject = New Project();

            $newProject->name = $faker->name();
            $newProject->tech = $faker->name();
            $newProject->completed = $faker->date();
            $newProject->client = $faker->name();
            $newProject->description = $faker->text();
            $newProject->url_img = $faker->name();
            $newProject->url_git = $faker->name();

            $newProject->save();
        }
    }
}
