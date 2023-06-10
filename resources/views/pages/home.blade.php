@extends('layout/master')
@section('title', 'Sportowe Newsy')
@section('content')


    <main>
        <div class="news_bgc" style="background-image: url({{ asset('storage/news_bgc.jpg') }})">
            <div class="news_bgc-opacity"></div>
            <div>
                <section class="home section container">

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
                        @php $i = 0 @endphp
                        @foreach ($newses as $news)
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
                            @php $i++ @endphp
                            @if ($i === 3)
                            @break
                        @endif
                    @endforeach
                </div>
        </div>
    </div>
    </section>
    </div>



    <section class="section newses_categories">
        <h3>Piłka Nożna</h3>
        <div class="newses-categories__container container">


            @php $j = 0 @endphp
            @foreach ($football_newses as $football_news)
                <div class="newses-categories__card">
                    <a href="{{ route('news', $football_news->id) }}">
                        <img src="{{ asset('storage/' . $football_news->image) }}" alt="">
                        <h5>{{ $football_news->title }}</h5>
                    </a>
                </div>
                @php $j++ @endphp
                @if ($j === 4)
                @break
            @endif
            @endforeach
        </div>
        <a href="{{ route('category', $football_news->category_id) }}">Więcej wiadomości z tej kategorii</a>
    </section>

    <div class="heroImg"
        style="background-image: url('{{ asset('storage/richard-bagan-SmQ2Cku3alc-unsplash.jpg') }}')"></div>

        <section class="section newses_categories">
            <h3>Koszykówka</h3>
            <div class="newses-categories__container container">
    
    
                @php $j = 0 @endphp
                @foreach ($basketball_newses as $basketball_news)
                    <div class="newses-categories__card">
                        <a href="{{ route('news', $basketball_news->id) }}">
                            <img src="{{ asset('storage/' . $basketball_news->image) }}" alt="">
                            <h5>{{ $basketball_news->title }}</h5>
                        </a>
                    </div>
                    @php $j++ @endphp
                    @if ($j === 4)
                    @break
                @endif
                @endforeach
            </div>
            <a href="{{ route('category', $basketball_news->category_id) }}">Więcej wiadomości z tej kategorii</a>
        </section>



    <div class="heroImg" style="background-image: url('{{ asset('storage/jerry-yu-HRo2pfbVulQ-unsplash.jpg') }}')">
    </div>

    <section class="section newses_categories">
        <h3>Hokej</h3>
        <div class="newses-categories__container container">


            @php $j = 0 @endphp
            @foreach ($hockey_newses as $hockey_news)
                <div class="newses-categories__card">
                    <a href="{{ route('news', $hockey_news->id) }}">
                        <img src="{{ asset('storage/' . $hockey_news->image) }}" alt="">
                        <h5>{{ $hockey_news->title }}</h5>
                    </a>
                </div>
                @php $j++ @endphp
                @if ($j === 4)
                @break
            @endif
            @endforeach
        </div>
        <a href="{{ route('category', $hockey_news->category_id) }}">Więcej wiadomości z tej kategorii</a>
    </section>




</main>



@include('../components/footer')
@endsection
