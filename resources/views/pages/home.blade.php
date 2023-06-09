@extends('layout/master')
@section('title', 'HomePage')
@section('content')


<main>
    <section class="home section container">
            <h3>Najnowsze Newsy:</h3>
            <div class="home__latest">
                <a href="{{route('news',$lastNews->id)}}">
                    <div class="home__latest-last" style="background-image: url('{{asset('storage/'. $lastNews->image)}}');">
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
                <a href="{{route('news',$news->id)}}">
                    <div class="home__latest-rest-card">
                        <div class="home__latest-rest-card-text">
                            <h3>
                                {{ $news->title }}
                            </h3>

                        </div>
                        <img src="{{asset('storage/' . $news->image)  }}" alt="">
                    </div>
                </a>
                <?php endforeach ?>
            </div>
            </div>
        </section>
    </main>


   

@endsection
