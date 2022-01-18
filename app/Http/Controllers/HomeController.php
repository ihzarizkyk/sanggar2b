<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Article;
use App\Models\Gallery;

class HomeController extends Controller
{
    public function index()
    {
        $article = Article::limit(3)->get();
        $gallery = Gallery::limit(3)->get();
        return view("index",compact("article","gallery"));
    }

    public function article()
    {
        $article = Article::paginate(7);
        return view("article.index",compact('article'));
    }

    public function detailArticle($slug)
    {
        $article = Article::where("slug",$slug)->get();
        // dd($article);
        return view("article.detail",["article" => $article]);
    }

    public function gallery()
    {
        $creativity= Gallery::where("category_id","=",1)->get();
        $cooking= Gallery::where("category_id","=",2)->get();
        $english= Gallery::where("category_id","=",3)->get();
        $outbound= Gallery::where("category_id","=",4)->get();
        return view("gallery.index",compact("creativity","cooking","english","outbound"));
    }

    public function volunteer()
    {
        return view("volunteer.index");
    }
}