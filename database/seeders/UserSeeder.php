<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name'=>'pepita',
            'email'=>'pepita@gmail.com',
            'password'=>Hash::make('12345678')
        ]);

        User::factory(2)->create();
    }
}
