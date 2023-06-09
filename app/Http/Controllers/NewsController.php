<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $newses = News::all();
        return view('admin/pages/newses/index',['newses'=>$newses]);
    }
    public function create(){
       $categories = Category::all();
       return view('admin/pages/newses/create',['categories'=>$categories]);
    }
    public function store(Request $request){
       $request->validate([
        'title'=>'required|max:255',
        'description'=>'required|max:255',
        'content'=>'required',
        'category_id'=>'required',
       ]);

    $news = News::create([
        'title'=>$request->title,
        'description'=>$request->description,
        'content'=>$request->content,
        'category_id'=>$request->category_id,
    ]);

    return back()->with('success','news dodany');
    }
}
