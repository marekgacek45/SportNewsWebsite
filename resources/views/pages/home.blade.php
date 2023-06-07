@extends('layout/master')
@section('title','HomePage')
@section('content')
<h1>homepage</h1>

<a href="{{route('login')}}"><button>login</button></a>
<a href="{{route('register')}}"><button>register</button></a>
@endsection