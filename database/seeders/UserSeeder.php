<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $all_data = [
            [
                'name' => 'Shahana',
                'email' => 'shahanaa594@gmail.com',
                'password' => Hash::make('12345678'),
            ],
        ];
        User::insert($all_data);
    }
}
