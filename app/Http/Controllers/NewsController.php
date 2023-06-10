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

     $image_name = 'newses/' .time() . rand(0,9999) . "." .$request->image->getClientOriginalExtension();
     $request->image->storeAs('public',$image_name); 

    $news = News::create([
        'title'=>$request->title,
        'description'=>$request->description,
        'content'=>$request->content,
        'category_id'=>$request->category_id,
        'image'=>$image_name,
    ]);

    return redirect('/')->with('succes','news dodany');
    }

    public function edit($id){
        $news = News::findOrFail($id);
        $categories = Category::all();
        return view('admin/pages/newses.edit',['news'=>$news,'categories'=>$categories]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'title'=>'required|max:255',
            'description'=>'required|max:255',
            'content'=>'required',
            'category_id'=>'required',
           ]);

           $news = News::findOrFail($id);

           $image_name=$news->image;

           if($request->image){
               $image_name = 'newses/' .time() . rand(0,9999) . "." .$request->image->getClientOriginalExtension();
               $request->image->storeAs('public',$image_name); 

           }
    
    
        $news->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'content'=>$request->content,
            'category_id'=>$request->category_id,
            'image'=>$image_name,
        ]);
    
        return redirect('/')->with('succes','news edytowany');
    }

    public function destroy($id){
        News::findOrFail($id)->delete();
        return back()->with('success','News usunięty');
    }
}
