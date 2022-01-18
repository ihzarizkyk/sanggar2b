<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Article extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table("articles")->insert([
            "image" => "https://cdn.pixabay.com/photo/2016/12/19/10/16/hands-1917895_960_720.png",
            "title" => "article 1",
            "slug" => "article-1",
            "body" => "lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum",
            "author" => "Admin Sanggar",
            "user_id" => 1]);

        DB::table("articles")->insert([
            "image" => "https://cdn.pixabay.com/photo/2016/12/19/10/16/hands-1917895_960_720.png",
            "title" => "article 2",
            "slug" => "article-2",
            "body" => "lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum",
            "author" => "Admin Sanggar",
            "user_id" => 1]);

        DB::table("articles")->insert([
            "image" => "https://cdn.pixabay.com/photo/2016/12/19/10/16/hands-1917895_960_720.png",
            "title" => "article 3",
            "slug" => "article-3",
            "body" => "lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum",
            "author" => "Admin Sanggar",
            "user_id" => 1]);

        DB::table("articles")->insert([
            "image" => "https://cdn.pixabay.com/photo/2016/12/19/10/16/hands-1917895_960_720.png",
            "title" => "article 4",
            "slug" => "article-4",
            "body" => "lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum",
            "author" => "Admin Sanggar",
            "user_id" => 1]);

        DB::table("articles")->insert([
            "image" => "https://cdn.pixabay.com/photo/2016/12/19/10/16/hands-1917895_960_720.png",
            "title" => "article 5",
            "slug" => "article-5",
            "body" => "lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum",
            "author" => "Admin Sanggar",
            "user_id" => 1]);
    }
}
