<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {

        $this->call([
            BlogSeeder::class,
            SettingSeeder::class,
            UserSeeder::class,
            ServiceSeeder::class,
            AboutSeeder::class,
            PortfolioSeeder::class,
            BlogCategorySeeder::class,
            SkillaboutSeeder::class,
            BannerSeeder::class,
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
