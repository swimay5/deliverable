<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('teams')->insert([
                'name' => 'MayTeam',
                'email' => 'may@gmail.com',
                'tel' => '08000000000',
                'password' => 'abcdefg5',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ]);
    }
}
