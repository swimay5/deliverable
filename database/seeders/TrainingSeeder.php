<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trainings')->insert([
                'date' => date(),
                'name' => 'GS_Ave',
                'comment' => '1セット目はよくできた。',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
        ]);
    }
}
