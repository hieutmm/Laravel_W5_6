<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Migrations\Migration;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 20; $i++) { 
            DB::table('comments')->insert([
                'diary_days_of_week_id' => mt_rand(1, 20),
                'rating' => mt_rand(1, 5),
                'comment' => Str::random(100),
                'user_id' => mt_rand(1, 20),
                'status' => 1,
            ]);
        }
    }
}