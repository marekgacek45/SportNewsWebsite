<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $newses = News::all();
        return view('pages/home',['newses'=>$newses]);
    }
    public function news($id){
        $news = News::with('category')->findOrFail($id);
        return view('pages/news',['news'=>$news]);
    }
}
