@extends('layout/master')
@section('title','dash')
@section('content')
<h1>admin panel</h1>

@auth
<form action="{{route('logout')}}"method="post">
    @csrf
    
    <button type="submit">logout</button>
    
    </form>
@endauth


<a href="{{route('home')}}"><button>home</button></a>

<a href="{{route('admin.categories')}}"><button>kategorie</button></a>
@endsection