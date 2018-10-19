<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {

        $articles=Article::where("status",1)->get();

        //dd($articles[0]->user);


        return view("article.index",compact("articles"));


    }
}
