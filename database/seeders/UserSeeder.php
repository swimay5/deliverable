<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                'name' => 'MayIkeda',
                'email' => 'may@gmail.com',
                'email_verified_at' => 'may@gmail.com',
                'password' => 'abcdefg5',
                'is_player' => true,
                'is_staff' => false,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ]);
    }
}
