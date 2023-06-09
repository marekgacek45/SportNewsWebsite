@extends('layout/master')
@section('title','Sportowe newsy - panel admina')
@section('content')
<main class="section container">
    

    <main class="section container">
        <h1>Panel admina</h1>
    
    
        <div class="container-fluid">
            <div class="row">
              <div class="col-md-3">
                <div class="sidebar">
                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('home')}}">
                        <i class="uil uil-home"></i>
                        <span class="sidebar-text">Strona główna</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('admin.newses')}}">
                        <i class="uil uil-newspaper"></i>
                        <span class="sidebar-text">Wszystkie Newsy</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('admin.newses.create')}}">
                        <i class="uil uil-plus-circle"></i>
                        <span class="sidebar-text">Dodaj newsa</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <i class="uil uil-book-open"></i>
                        <span class="sidebar-text">Felietony</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <i class="uil uil-book-medical"></i>
                        <span class="sidebar-text">Dodaj felieton</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('admin.categories')}}">
                        <i class="uil uil-list-ul"></i>
                        <span class="sidebar-text">Kategorie</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-9">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tytuł</th>
                        <th scope="col">Kategoria</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Akcje</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($newses as $news)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{$news->title}}</td>
                            <td>{{$news->category->name}}</td>
                            <td>Autor</td>
                            <td><div>
                                <a href=""><i class="uil uil-eye"></i></a>
                                <a href=""><i class="uil uil-edit"></i></a>
                                <a href=""><i class="uil uil-times-circle"></i></a>
                            </div></td>
                        </tr>
            @endforeach
                      
                    </tbody>
                    
                  </table>
              </div>
            </div>
          </div>
        
        
    </main>



@endsection