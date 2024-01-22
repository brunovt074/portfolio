<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Knowledge;

class KnowledgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Knowledge::create([
            'title'=>'Java/Spring Framework',
        ]);
        
        Knowledge::create([
            'title'=>'PHP/Laravel',            
        ]);

        Knowledge::create([
            'title'=>'MySQL',            
        ]);

        Knowledge::create([
            'title'=>'HTML CSS JS',            
        ]);
    }
}
