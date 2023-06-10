@extends('layout/admin')
@section('title', 'Edytuj Newsa')
@section('content')

<h3>Edytuj Newsa:</h3>

<form action="{{ route('admin.edit',$news->id) }}"method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label">Tytuł:</label>
        <input type="text" class="form-control @error('title') has-error @enderror" id="title" name="title"
            aria-describedby="titleHelp" value="{{$news->title}}">
        @error('title')
            <div id="titleHelp" class="form-text">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Opis:</label>
        <input type="text" class="form-control @error('description') has-error @enderror" id="description"
            name="description" aria-describedby="titleHelp" value="{{$news->description}}">
        @error('description')
            <div id="descriptionHelp" class="form-text">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
    <label for="category_id" class="form-label">Wybierz kategorię:</label>
    <select class="form-select" aria-label="Default select example" name="category_id" id="category_id">
        <option selected disabled>-- Wybierz kategorię --</option>
        @foreach ($categories as $category)
        <option value="{{ $category->id }}" {{$news->category_id == $category->id ? 'selected': ''}}>{{ $category->name }}</option>
    @endforeach
    </select>
</div>

<div class="mb-3">
    <label for="image" class="form-label">Zdjęcie główne:</label>
    <input type="file" class="form-control @error('image') has-error @enderror" id="image" name="image"
        aria-describedby="imageHelp">
    @error('image')
        <div id="imageHelp" class="form-text">{{ $message }}</div>
    @enderror
    <img src="{{asset('storage/' .$news->image)}}" alt="" style="width:200px;height:200px;margin-top:1em">
</div>

<div class="mb-3">
    <label for="content">Treść newsa:</label>
    <textarea class="form-control"  id="content" name="content" cols="30" rows="20">{{$news->content}}</textarea>
</div>


    <button type="submit" class="btn btn-primary">Opublikuj</button>
</form>


@endsection

