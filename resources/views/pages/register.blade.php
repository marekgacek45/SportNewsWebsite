@extends('layout/master')
@section('title','Sportowe Newsy - zarejestruj się')
@section('content')




<main class="container section login">
    <h2>Zarejestruj się</h2>
    <div class="form">
        <form action="{{route('register')}}"method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nazwa Użytkownika:</label>
                <input type="text" class="form-control" id="name" name="name"
                    aria-describedby="nameHelp">
                @error('name')
                    <div id="nameHelp" class="form-text">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email"
                    aria-describedby="emailHelp">
                @error('email')
                    <div id="emailHelp" class="form-text">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Hasło:</label>
                <input type="password" class="form-control" id="password"
                    name="password"  aria-describedby="passwordHelp">
                    @error('password')
                    <div id="passwordHelp" class="form-text">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Powtórz hasło:</label>
                <input type="password" class="form-control" id="password"
                    name="password_confirmation">
                    
            </div>


            <button type="submit" class="btn btn-primary">Zarejestruj się</button>
        </form>
    </div>
    <p class="register">Masz konto? <a href="{{route('login')}}">Zaloguj się</a></p>

</main>



@endsection