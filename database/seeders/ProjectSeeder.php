<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 10; $i++) {

            $newProject = new Project();

            $newProject->title = $faker->numerify('Project-####');
            $newProject->description = $faker->text(500);
            $newProject->thumb = 'project_images/' . $faker->uuid();
            $newProject->link = 'https://github.com/' . $newProject->title;
            $newProject->type_id = $faker->numberBetween(1, 4);

            $newProject->save();
        }
    }
}
