<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        return 'newses';
    }
    public function create(){
        return 'create';
    }
    public function store(Request $request){
        return 'store';
    }
}
