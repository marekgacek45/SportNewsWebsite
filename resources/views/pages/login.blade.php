@extends('layout/master')
@section('title', 'Sportowe Newsy - zaloguj się')
@section('content')


    {{-- <form action="{{route('login')}}"method="post">
    @csrf
    
    <label for="name">name</label>
    <input type="text" name="name" id="name">
    
    <label for="password">password</label>
    <input type="password" name="password" id="password">
    
    <button type="submit">wyślij</button>
    
</form> --}}
    <main class="container section login">
        <h2>Zaloguj się</h2>
        <div class="form">
            <form action="{{ route('login') }}"method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nazwa Użytkownika:</label>
                    <input type="text" class="form-control @error('name') has-error @enderror" id="name" name="name"
                        aria-describedby="nameHelp">
                    @error('name')
                        <div id="nameHelp" class="form-text">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Hasło:</label>
                    <input type="password" class="form-control @error('passwrod') has-error @enderror" id="password"
                        name="password"  aria-describedby="passwordHelp">
                        @error('password')
                        <div id="passwordHelp" class="form-text">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Zaloguj się</button>
            </form>
        </div>
        <p class="register">Nie masz konta? <a href="{{route('register')}}">Zarejestruj się</a></p>

    </main>






@endsection
