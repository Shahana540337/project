<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Banner;

class BannerSeeder extends Seeder
{
    public function run(): void
    {
        $all_data = [
            [
                'title' => 'I am Shahana Akter',
            ],
        ];
        foreach($all_data as $data){
            Banner::create($data);
        }
    }
}
