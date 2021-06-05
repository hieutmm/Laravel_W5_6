<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Migrations;

class CategoriesHasCompaniesSeender extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for ($i=0; $i <= 20; $i++){ //Vòng lặp 20 lần để thêm vào
        DB::table('categories_has_companies')->insert([
            'company_id' => mt_rand(1, 20), //Random ki tu
            'category_id' => mt_rand(1, 20), //Random ki tu
            'status' => 1,
        ]);
       }
    }
}
