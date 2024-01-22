<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'title'=>'Fullstack Developer',
            'description'=>'Backend and Frontend Development',
            'logo_url'=>'resources/images/programacion.png',
            'color_hex'=>'#FCF4FF'
        ]);

        Service::create([
            'title'=>'Backend Developer',
            'description'=>'Backend and Frontend Development',
            'logo_url'=>'programa.png',
            'color_hex'=>'#FEFAF0'
        ]);

        Service::create([
            'title'=>'Translations',
            'description'=>'Backend and Frontend Development',
            'logo_url'=>'programacion.png',
            'color_hex'=>'#FCF4FF'
        ]);

        Service::create([
            'title'=>'DBA Developer',
            'description'=>'Backend and Frontend Development',
            'logo_url'=>'programa.png',
            'color_hex'=>'#FEFAF0'
        ]);
    }
}
