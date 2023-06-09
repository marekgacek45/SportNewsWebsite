@extends('layout/master')
@section('title','HomePage')
@section('content')
<h1>homepage</h1>

@auth
<form action="{{route('logout')}}"method="post">
    @csrf
    
    <button type="submit">logout</button>
    
    </form>
@endauth


<a href="{{route('login')}}"><button>login</button></a>
<a href="{{route('register')}}"><button>register</button></a>

<a href="{{route('admin')}}"><button>admin</button></a>

@foreach ($newses as $news)
    <h2>{{$news->title}}</h2>
    <p>{{$news->description}}</p>
    <img src="{{asset('storage/'. $news->image)}}" alt="">
   
@endforeach

@endsection