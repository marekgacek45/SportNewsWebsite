<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {

        $football_newses = News::with('category')->where('category_id', '=', '1')->get();
        $basketball_newses = News::with('category')->where('category_id', '=', '2')->get();
        $hockey_newses = News::with('category')->where('category_id', '=', '3')->get();
        $other_newses = News::with('category')
    ->whereNotIn('category_id', [1, 2, 3])
    ->get();

        $newses = News::with('category')->orderBy('id', 'desc')->get();
        $lastNews = $newses->first();
        $newses->shift();
        return view('pages/home', ['newses' => $newses, 'lastNews' => $lastNews,'football_newses'=>$football_newses,'basketball_newses'=>$basketball_newses,'hockey_newses'=>$hockey_newses,'other_newses'=>$other_newses]);
    }
    public function news($id)
    {
        $newses = News::with('category')->orderBy('id', 'desc')->get();
        $news = News::with('category')->findOrFail($id);
        return view('pages/news', ['news' => $news,'newses' => $newses,]);
    }

    public function category($id){
        $newses = News::with('category')->where('category_id', '=', $id)->get();

        return(view('pages/category',['newses'=>$newses]));
    }
}