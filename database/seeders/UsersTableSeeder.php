<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'name' => 'あああ',
                'email' => 'test@gmail.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'いいい',
                'email' => 'test2@gmail.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'ううう',
                'email' => 'test3@gmail.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'nomad',
                'email' => 'bbana81@gmail.com',
                'password' => Hash::make('password123'),
            ]
        ]);
    }
}
