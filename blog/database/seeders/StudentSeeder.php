<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Migrations\Migration;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 20; $i++) { 
            DB::table('students')->insert([
                'trainer_id' => mt_rand(1, 20),
                'class_id' => mt_rand(1, 20),
                'user_id' => mt_rand(1, 20),
                'faculty_id' => mt_rand(1, 20),
                'status' => 1,
            ]);
        }
    }
}