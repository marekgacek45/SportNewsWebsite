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
@endsection