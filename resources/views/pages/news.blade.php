@extends('layout/master')
@section('title', $news->title)
@section('content')

    <main class="section container">

        <h2>{{ $news->title }}</h2>
        <img src="{{ asset('storage/' . $news->image) }}" alt="">
        <p>{{ $news->created_at }}</p>

        <p style="font-weight: bold">{{ $news->description }}</p>
        <p>{!! nl2br(e($news->content)) !!}</p>
    </main>

   


@endsection
