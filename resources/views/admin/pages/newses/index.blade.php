@extends('layout/master')
@section('title','newses')
@section('content')
<h1>wszystkie newsy</h1>

<a href="{{route('home')}}"><button>home</button></a>
<a href="{{route('admin')}}"><button>admin</button></a>
<a href="{{route('admin.newses.create')}}"><button>stówrz nowy</button></a>





<main class="container">
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
                    <a href=""><i class="uil uil-eye"></i></a>
                </div></td>
            </tr>
@endforeach
          
        </tbody>
        {{-- <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody> --}}
      </table>
</main>



@endsection