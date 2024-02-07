<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Portfolio;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        $all_data = [
            [
                'title' => 'Mavrito Lana Dere is',
                'category' => 'Travel',
            ],
            [
                'title' => 'Loreda Cuno Nere et',
                'category' => 'Fashoin',
            ],
            [
                'title' => 'Dennis Vinson Omnis',
                'category' => 'Technology',
            ],
        ];
        foreach($all_data as $data){
            Portfolio::create($data);
        }
    }
}
