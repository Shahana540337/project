<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        $all_data = [
            [
                'title' => 'Excepteur consequunt',
                'image' => '',
                'category' => '1',
                'description' => 'Children should live their school life to the fullest.',
            ],
            [
                'title' => 'Ullamco dolore rem qm',
                'image' => '',
                'category' => '2',
                'description' => 'Children should live their school life to the fullest.',
            ],
            [
                'title' => 'Vero esse rerum etkl',
                'image' => '',
                'category' => '3',
                'description' => 'Children should live their school life to the fullest.',
            ],
            [
                'title' => 'Anim voluptatem atis',
                'image' => '',
                'category' => '4',
                'description' => 'Children should live their school life to the fullest.',
            ],
        ];
        foreach($all_data as $data){
            Blog::create($data);
        }
    }
}
