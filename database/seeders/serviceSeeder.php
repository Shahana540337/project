<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class serviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $all_data = [
            [
                'name' => 'Web Design',
                'description' => 'As a web designer, I create custom websites that are visually appealing, user-friendly, and optimized for search engines to help businesses succeed online.',
            ],
            [
                'name' => 'Web Development',
                'description' => 'As a web developer, I use my coding skills to create functional and  user-friendly websites that help businesses and individuals  succeed online.',
            ],
            [
                'name' => 'SEO Marketing',
                'description' => ' As an SEO expert, I help businesses improve their online  visibility and attract more traffic  by optimizing their website content and structure.',
            ],
        ];
        foreach($all_data as $data){
            Service::create($data);
        }
    }
}
