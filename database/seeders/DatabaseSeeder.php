<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Usuario de ejemplo',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'description' => "Software Developer",
            'github_url' => "https://github.com/brunovt074",
            'linkedin_url' => "https://www.linkedin.com/in/bruno-vargas-tettamanti-developer/?locale=en_US",
            'phone' => "+54 3772 56 62 42",
            'address' => "Argentina",
            'bio' => "My name is Bruno Vargas Tettamanti. I consider myself a curious person who is always willing to learn new things. I like to apply critical analysis to problem-solving and believe that creativity is fundamental in this process.<br>
                    I enjoy teamwork, but also don't feel overwhelmed by individual challenges."
        ]);
    }
}