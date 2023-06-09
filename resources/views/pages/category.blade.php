@extends('layout/master')
@section('title', 'HomePage')
@section('content')


@foreach ($newses as $news)
    <h3>{{$news->title}}</h3>
@endforeach

@endsection