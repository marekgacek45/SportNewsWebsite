@extends('layout/master')
@section('title', 'HomePage')
@section('content')


<main class="container">
        <h1>homepage</h1>
        @foreach ($newses as $news)
        <a href="{{ route('news', ['id' => $news->id]) }}">
              <h2>{{ $news->title }}</h2>
              <p>{{ $news->description }}</p>
              <img src="{{ asset('storage/' . $news->image) }}" alt="">
          </a>
      @endforeach
    </main>


   

@endsection
