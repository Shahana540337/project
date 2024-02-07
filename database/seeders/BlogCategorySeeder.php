<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BlogCategory;

class BlogCategorySeeder extends Seeder
{
    public function run(): void
    {
        $all_data = [
            [
                'title' => 'Web Design',
            ],
            [
                'title' => 'Technology',
            ],
            [
                'title' => 'Travel',
            ],
            [
                'title' => 'Fashoin',
            ],
        ];
        foreach($all_data as $data){
            BlogCategory::create($data);
        }
    }
}
