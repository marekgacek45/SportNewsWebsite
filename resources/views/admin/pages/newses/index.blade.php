@extends('layout/master')
@section('title','newses')
@section('content')
<h1>wszystkie newsy</h1>

<a href="{{route('home')}}"><button>home</button></a>
<a href="{{route('admin')}}"><button>admin</button></a>
<a href="{{route('admin.newses.create')}}"><button>stówrz nowy</button></a>







@endsection