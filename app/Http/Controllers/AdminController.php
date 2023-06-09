<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        $newses = News::all();
        return view('admin/pages/newses/index',['newses'=>$newses]);
    }
}
