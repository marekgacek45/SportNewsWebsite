@extends('layout/master')
@section('title','Sportowe newsy - panel admina')
@section('content')
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
            <div>tutja będzie kontent</div>
          </div>
        </div>
      </div>
    
    
</main>



<a href="{{route('home')}}"><button>home</button></a>

<a href="{{route('admin.categories')}}"><button>kategorie</button></a>
<a href="{{route('admin.newses')}}"><button>newsy</button></a>

<button type="button" class="btn btn-primary">Primary</button>








@endsection