@extends('layout/master')
@section('title', 'HomePage')
@section('content')


    <main>
        <section class="home section container">
            <h3>Najnowsze Newsy:</h3>
            <div class="home__latest">
                <a href="{{ route('news', $lastNews->id) }}">
                    <div class="home__latest-last"
                        style="background-image: url('{{ asset('storage/' . $lastNews->image) }}');">
                        <div class="home__latest-last--opacity"></div>
                        <div class="home__latest-last-text">
                            <h3>
                                {{ $lastNews->title }}
                            </h3>
                            <p>
                                {{ $lastNews->description }}
                            </p>
                        </div>

                </a>
            </div>
            <div class="home__latest-rest">
                <?php foreach ($newses as $news): ?>
                <a href="{{ route('news', $news->id) }}">
                    <div class="home__latest-rest-card">
                        <div class="home__latest-rest-card-text">
                            <h3>
                                {{ $news->title }}
                            </h3>

                        </div>
                        <img src="{{ asset('storage/' . $news->image) }}" alt="">
                    </div>
                </a>
                <?php endforeach ?>
            </div>
            </div>
        </section>

        <section class="section">
            <h3>Wiadomości z kategorii: Piłka Nożna</h3>
            @foreach ($football_newses as $football_news)
                <p>{{ $football_news->title }}</p>
            @endforeach
            <a href="{{route("category",$football_news->category_id)}}">Więcej wiadomości z tej kategorii</a>
        </section>
        <section class="section">
            <h3>Wiadomości z kategorii: Koszykówka</h3>
            @foreach ($basketball_newses as $basketball_news)
                <p>{{ $basketball_news->title }}</p>
            @endforeach
            {{-- <a href="{{route("category",$basketball_news->category_id)}}">Więcej wiadomości z tej kategorii</a> --}}
        </section>
        <section class="section">
            <h3>Wiadomości z kategorii: Hokej</h3>
            @foreach ($hockey_newses as $hockey_news)
                <p>{{ $hockey_news->title }}</p>
            @endforeach
            <a href="{{route("category",$hockey_news->category_id)}}">Więcej wiadomości z tej kategorii</a>
        </section>
        <section class="section">
            <h3>Wiadomości z kategorii: Pozostałe</h3>
            @foreach ($other_newses as $other_news)
                <p>{{ $other_news->title }}</p>
            @endforeach
            {{-- <a href="{{route("category",$other_news->category_id)}}">Więcej wiadomości z tej kategorii</a> --}}
        </section>
    </main>




@endsection
