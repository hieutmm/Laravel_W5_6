<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Migrations;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5000000; $i++){
            DB::table('trainers')->insert([          
            'trainer_name' => 'hieu',
            'company_id' => 123,
            'trainer_email' => Str::random(20),
            'trainer_phone' => '123456',
            ]);
        }
    }
}
