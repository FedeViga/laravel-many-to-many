<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = ['html', 'css', 'javascript', 'bootstrap', 'vue.js', 'laravel'];

        $colors = ['#E65100', '#0277BD', '#F0DB4F', '#8812FE', '#41B883', '#FF2D20'];

        foreach($technologies as $key=>$technology) {

            $newTechnology = new Technology();
    
            $newTechnology->title = $technology;
            $newTechnology->color = $colors[$key];

            $newTechnology->save();
        }

    }
}
