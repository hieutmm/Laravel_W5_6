<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Migrations\Migration;

class DiaryDayOfWeekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 20; $i++) { 
            DB::table('diary_days_of_weeks')->insert([
                'intership_diary_week_id' => mt_rand(1, 20),
                'diary_days_of_week_date' => mt_rand(2, 7),
                'diary_days_of_week_description' => Str::random(100),
                'status' => 1,
            ]);
        }
    }
}