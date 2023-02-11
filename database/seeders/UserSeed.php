<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Hash;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('app_users')->insert([
            'name' => "Administrative User",
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
