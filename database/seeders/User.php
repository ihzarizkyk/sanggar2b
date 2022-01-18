<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "name" => "anonim",
            "role" => "admin",
            "email" => "ihzarizkyk@wrisepedia.com",
            "password" => Hash::make("1234"),
        ]);
    }
}
