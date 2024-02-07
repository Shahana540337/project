<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{

    public function run(): void
    {
        $all_data = [
            [
                'title' => 'Company Name',
                'logo' => 'Logo 1',
                'mobile' => '01234567890',
                'email' => 'shahanaa594@gmail.com',
                'location' => 'Khulna,Bangladesh',
                'facebook' => 'https://facebook.com/',
                'instagram' => 'https://www.instagram.com/',
                'twitter' => 'https://twitter.com/',
                'linkedin' => 'https://www.linkedin.com/',
            ],
        ];
        foreach($all_data as $setting){
            Setting::create($setting);;
        }
    }
}
