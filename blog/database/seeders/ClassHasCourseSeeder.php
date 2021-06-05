<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Migrations\Migration;

class ClassHasCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 20; $i++) { 
            DB::table('classes_has_courses')->insert([
                'class_id' => mt_rand(1, 20),
                'course_id' => mt_rand(1, 20),
                'status' => 1,
            ]);
        }
    }
}