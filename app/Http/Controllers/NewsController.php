<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index(){
        $news = News::get();
        return view('news.index', compact("news"));
//        dd($events);
    }

    public function show($news){

        $news = News::find($news);
        return view('news.show', compact("news"));
    }
}
