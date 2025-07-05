<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Admin',
            'email' => 'Admin@seife.gov.sy',
            'email_verified_at' => now(),
            'password' => Hash::make('DAA@2025'),
            'remember_token' => Str::random(10),
        ]);

        $this->call([
            StaffSeeder::class,
            LanguagesSeeder::class,
            BreakingNewsSeeder::class,
        ]);

        \App\Models\Audio::insert([
        [
            'title'=>'Gentle Rain',
            'image' => 'images/staff/1.jpeg',
            'description'=>'Relaxing rain sound',
            'language_id'=>1,
            'file_name'=>'rain.mp3',
        ],
        [
            'title'=>'Ocean Waves',
            'image' => 'images/staff/2.jpeg',
            'description'=>'Soothing ocean waves',
            'language_id'=>1,
            'file_name'=>'waves.mp3',
        ]
    ]);


    }
}
