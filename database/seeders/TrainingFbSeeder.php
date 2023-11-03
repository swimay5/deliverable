<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class TrainingFbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('training_fb')->insert([
                'comment' => 'よく頑張りました。',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
        ]);
    }
}
