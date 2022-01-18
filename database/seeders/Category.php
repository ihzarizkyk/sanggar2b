<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("categories")->insert([
            "name" => "creativity class"]);

        DB::table("categories")->insert([
            "name" => "cooking class"]);

        DB::table("categories")->insert([
            "name" => "english class"]);

        DB::table("categories")->insert([
            "name" => "outbound"]);
    }
}
