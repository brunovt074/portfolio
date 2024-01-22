<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Education;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Education::create([
            'title'=>'UTN FRSF',
            'description'=>'Tecnicatura Universitaria en Tecnologias de la Informacion',
            'dates'=>'2021-2023',
            'color_hex'=>'#FCF4FF',
        ]);
        
        Education::create([
            'title'=>'CELC',
            'description'=>'English B1.2',
            'dates'=>'2021-2024',
            'color_hex'=>'#FCF4FF',
        ]);

        Education::create([
            'title'=>'UTN BA',
            'description'=>'Cibersecurity',
            'dates'=>'2021-2024',
            'color_hex'=>'#FCF4FF',
        ]);

        Education::create([
            'title'=>'Google - Coursera Data Analytics',
            'description'=>'Data Analytics',
            'dates' => '2021-2024',
            'color_hex'=>'#FCF4FF',
        ]);
    }
}
