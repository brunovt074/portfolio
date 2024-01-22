<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Experience;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Experience::create([
            'title'=>'Java/Spring Framework',
            'description'=>'Fullstack development',
            'dates'=>'2021-2023',
            'color_hex'=>'#FEFAF0',
        ]);
        
        Experience::create([
            'title'=>'PHP/Laravel',
            'description'=>'Fullstack development',
            'dates'=>'2021-2024',
            'color_hex'=>'#FEFAF0',
        ]);

        Experience::create([
            'title'=>'MySQL',
            'description'=>'BD',
            'dates'=>'2021-2024',
            'color_hex'=>'#FEFAF0',
        ]);

        Experience::create([
            'title'=>'HTML CSS JS',
            'description'=>'Web Development',
            'dates' => '2021-2024',
            'color_hex'=>'#FEFAF0',
        ]);
    }
}
