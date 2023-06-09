@extends('layout/master')
@section('title', $news->title)
@section('content')

    <main class="section container">

        <h2>{{ $news->title }}</h2>
        <img src="{{ asset('storage/' . $news->image) }}" alt="">
        <p>{{ $news->created_at }} Napisał: autor</p>

        <p style="font-weight: bold">{{ $news->description }}</p>
        <p>{!! nl2br(e($news->content)) !!}</p>
    </main>

    <div class="container section">

        <h4>Pozostałe artykuły</h4>

        @foreach ($newses as $other_news)
            <div>
                <img src="{{asset('storage/' . $other_news->image)}}" alt="">
                <h3>{{$other_news->title}}</h3>
            </div>
        @endforeach
    </div>


@endsection
