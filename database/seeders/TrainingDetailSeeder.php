<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class TrainingDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('training_detail')->insert([
                'image' => '',
                'movie' => '',
                'document' => '',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
        ]);
    }
}
