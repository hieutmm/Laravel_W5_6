<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Migrations;


class TrainersSeender extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i <= 20; $i++){
            DB::table('trainers')->insert([          
            'is_leader' => mt_rand(0, 20),
            'company_id' => mt_rand(0, 20),
            'user_id' => mt_rand(0, 20),
            'status' => 1,
            ]);
        }
    }
}
