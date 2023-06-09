@extends('layout/master')
@section('title','categories')
@section('content')
<h1>categories</h1>

<a href="{{route('home')}}"><button>home</button></a>
<a href="{{route('admin')}}"><button>admin</button></a>



<form action="{{route('admin.category.store')}}"method="post">
    @csrf
    
    <label for="name">name</label>
    <input type="text" name="name" id="name">

    
    <button type="submit">stwórz</button>
    
    </form>



@endsection

