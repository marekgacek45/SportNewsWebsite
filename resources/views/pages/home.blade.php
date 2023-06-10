@extends('layout/master')
@section('title', 'HomePage')
@section('content')


    <main>
        <div  class="news_bgc" style="background-image: url({{asset('storage/news_bgc.jpg')}})">
            <div class="news_bgc-opacity"></div>
            <div >
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
        </div>
        </section>
        </div>

        <div class="heroImg" style="background-image: url('{{asset('storage/wesley-tingey-dKCKiC0BQtU-unsplash.jpg' )}}')"></div>

        <section class="section newses_categories" >
            <h3>Piłka Nożna</h3>
            <div class="newses-categories__container container" style="background-color: ">

                
                @foreach ($football_newses as $football_news)
                <div class="newses-categories__card">
                    <a href="{{route('news',$football_news->id)}}">
                    <img src="{{asset('storage/' . $football_news->image)  }}" alt="">
                    <h5>{{ $football_news->title }}</h5>
                </a>
                </div>
                @endforeach
            </div>
            <a href="{{ route('category', $football_news->category_id) }}">Więcej wiadomości z tej kategorii</a>
        </section>

<div class="heroImg" style="background-image: url('{{asset('storage/richard-bagan-SmQ2Cku3alc-unsplash.jpg' )}}')"></div>

        <section class="section newses_categories container" >
            <h3>Koszykówka</h3>
            <div class="newses-categories__container">
                @foreach ($basketball_newses as $basketball_news)
                <div class="newses-categories__card">
                    <a href="{{route('news',$basketball_news->id)}}">
                    <img src="{{asset('storage/' . $basketball_news->image)  }}" alt="">
                    <p>{{ $basketball_news->title }}</p>
                </a>
                </div>
                @endforeach
            </div>
            <a href="{{ route('category', $football_news->category_id) }}">Więcej wiadomości z tej kategorii</a>
        </section>
        <div class="heroImg" style="background-image: url('{{asset('storage/jerry-yu-HRo2pfbVulQ-unsplash.jpg' )}}')"></div>
        <section class="section newses_categories" >
            <h3>Hokej</h3>
            <div class="newses-categories__container container">
                @foreach ($hockey_newses as $hockey_news)
                <div class="newses-categories__card">
                    <a href="{{route('news',$hockey_news->id)}}">
                    <img src="{{asset('storage/' . $hockey_news->image)  }}" alt="">
                    <p>{{ $hockey_news->title }}</p>
                </a>
                </div>
                @endforeach
            </div>
            <a href="{{ route('category', $hockey_news->category_id) }}">Więcej wiadomości z tej kategorii</a>
        </section>

        <div class="heroImg" style="background-image: url('{{asset('storage/andrea-leopardi-QVD3Xht9txA-unsplash.jpg' )}}')"></div>

         <section class="section newses_categories container" >
            <h3>Pozostałe sporty</h3>
            <div class="newses-categories__container">
                @foreach ($other_newses as $other_news)
                <div class="newses-categories__card">
                    <a href="{{route('news',$other_news->id)}}">
                    <img src="{{asset('storage/' . $other_news->image)  }}" alt="">
                    <H4>{{ $other_news->title }}</H4>
                </a>
                </div>
                @endforeach
            </div>
            <a href="{{ route('category', $hockey_news->category_id) }}">Więcej wiadomości z tej kategorii</a>
        </section>
    </main>



@include('../components/footer')
@endsection
