<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Migrations\Migration;

class IntershipDiaryWeekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 20; $i++) { 
            DB::table('intership_diary_weeks')->insert([
                'intership_diary_week' => mt_rand(1, 6),
                'student_id' => mt_rand(1, 20),
                'status' => 1,
            ]);
        }
    }
}