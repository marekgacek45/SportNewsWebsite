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
}
