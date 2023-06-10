@extends('layout/admin')
@section('title','Stwórz kategorię')
@section('content')
<h1>Stwórz kategorię</h1>

<form action="{{route('admin.category.store')}}"method="post">
    @csrf
    
    <div class="mb-3">
        <label for="name" class="form-label">Tytuł:</label>
        <input type=name" class="form-control @error('name') has-error @enderror" id="name" name="name"
            aria-describedby="nameHelp">
        @error('name')
            <div id="nameHelp" class="form-text">{{ $message }}</div>
        @enderror
    </div>

    
    <button type="submit" class="btn btn-primary">Dodaj kategorię</button>
    
    </form>



@endsection

