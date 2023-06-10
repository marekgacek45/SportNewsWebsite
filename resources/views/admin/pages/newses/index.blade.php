@extends('layout/admin')
@section('title', 'newses')
@section('content')

    <main class="section container-fluid">
        <h1>Panel admina</h1>


        
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Data</th>
                                <th scope="col">Tytuł</th>
                                <th scope="col">Kategoria</th>
                                <th scope="col">Akcje</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($newses as $news)
                                <tr>
                                    <th scope="row">{{ $news->created_at }}</th>
                                    <td>{{ $news->title }}</td>
                                    <td>{{ $news->category->name }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('news', ['id' => $news->id]) }}">
                                                <button class="btn"><i
                                                    class="uil uil-eye" style="font-size:2rem"></i></button></a>

                                            <a href=""><button class="btn"><i class="uil uil-edit"  style="font-size:2rem"></i></button></a>
                                            <a href=""></a>


                                            <form action="{{ route('admin.newses.destroy', $news->id) }}"method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn" type="submit"><i class="uil uil-times-circle "  style="font-size:2rem"></i></button>
                                            </form>

                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>

                    </table>

    </main>








@endsection
