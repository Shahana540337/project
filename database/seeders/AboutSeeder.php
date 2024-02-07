<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\About;

class AboutSeeder extends Seeder
{
    public function run(): void
    {
        $all_data = [
            [
                'name' => 'Shahana Akter',
                'image' =>'',
                'profile' =>'Web Developer',
                'email' =>'user@gmail.com',
                'phone' =>'01234567890',
                'description' => 'Portfolio sites are vital for freelancers or companies working in the digital age. While all agencies can hand out business cards and certain freelancers, such as photographers, can distribute physical portfolios to potential clients, a portfolio website provides a way for any freelancer in any industry to reach more clients on a global scale.',
                
            ],
        ];
        foreach($all_data as $data){
            About::create($data);
        }
    }
}
