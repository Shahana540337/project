<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skillabout;

class SkillaboutSeeder extends Seeder
{
    public function run(): void
    {
        $all_data = [
            [
                'skill_title' => 'HTML',
                'skill_percentage' => '94%',
            ],
            [
                'skill_title' => 'CSS',
                'skill_percentage' => '88%',
            ],
        ];
        foreach($all_data as $data){
            Skillabout::create($data);
        }
    }
}
