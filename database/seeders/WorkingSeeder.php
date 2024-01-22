<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\WorkingSkills;

class WorkingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WorkingSkills::create([
            'title' => 'Developer',
            'percentage'=> '',
        ]);

        WorkingSkills::create([
            'title' => 'Translator',
            'percentage'=> '',
        ]);

        WorkingSkills::create([
            'title' => 'DBA',
            'percentage'=> '',
        ]);

        WorkingSkills::create([
            'title' => 'Cibersec',
            'percentage'=> '',
        ]);
    }
}
