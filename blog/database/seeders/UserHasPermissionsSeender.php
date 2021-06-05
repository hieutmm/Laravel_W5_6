<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Migrations;

class UserHasPermissionsSeender extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for ($i=0; $i <= 20; $i++){ //Vòng lặp 20 lần để thêm vào
        DB::table('users_has_permissions')->insert([
            'permission_id' => mt_rand(0, 20), 
            'user_id' => mt_rand(0, 20), 
            'status' => 1,
        ]);
       }
    }
}
