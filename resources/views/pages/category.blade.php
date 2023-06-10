@extends('layout/master')
@section('title', 'Sportowe Newsy - ')
@section('content')


    <main class="section container">
        @foreach ($newses as $news)
            <div class="category__card" style="margin-bottom:3em">
                <a href="{{ route('news', $news->id) }}" style="color:black">
                    <h2>{{ $news->title }}</h2>
                    <img src="{{ asset('storage/' . $news->image) }}" alt="" class="img-fluid">
                    <p>{{ $news->created_at }}</p>

                    <p style="font-weight: bold">{{ $news->description }}</p>
                </a>
            </div>
        @endforeach
    </main>

@endsection
