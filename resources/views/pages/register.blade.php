@extends('layout/master')
@section('title','register')
@section('content')
<h1>register</h1>

<form action="{{route('register')}}"method="post">
@csrf

<label for="name">name</label>
<input type="text" name="name" id="name">

<label for="email">email</label>
<input type="email" name="email" id="email">

<label for="password">password</label>
<input type="password" name="password" id="password">
<label for="password_confirmation">powtórz hasło</label>
<input type="password" name="password_confirmation" id="password_confirmation">

<button type="submit">wyślij</button>

</form>
@endsection