<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        // $newses = News::all();
        // return view('pages/home',['newses'=>$newses]);
        $newses = News::with('category')->orderBy('id', 'desc')->get();
        $lastNews = $newses->first();
        $newses->shift();
        return view('pages/home', ['newses' => $newses, 'lastNews' => $lastNews]);
    }
    public function news($id)
    {
        $news = News::with('category')->findOrFail($id);
        return view('pages/news', ['news' => $news]);
    }
}