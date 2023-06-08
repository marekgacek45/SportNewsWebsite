@extends('layout/master')
@section('title','login')
@section('content')
<h1>login</h1>


<form action="{{route('login')}}"method="post">
    @csrf
    
    <label for="name">name</label>
    <input type="text" name="name" id="name">
    
    <label for="password">password</label>
    <input type="password" name="password" id="password">
    
    <button type="submit">wyślij</button>
    
    </form>
@endsection