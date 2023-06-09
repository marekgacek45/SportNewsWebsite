@extends('layout/master')
@section('title','stworz')
@section('content')
<h1>nowy</h1>

<a href="{{route('home')}}"><button>home</button></a>
<a href="{{route('admin')}}"><button>admin</button></a>




<form action="{{route('admin.store')}}"method="post" enctype="multipart/form-data">
    @csrf
    
    <label for="title">title</label>
<input type="text" name="title" id="title">

<label for="description">description</label>
<input type="text" name="description" id="description">

<select name="category_id" id="category_id">
    <option value="" selected disabled>-- wybierz --</option>
    @foreach ($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
    @endforeach
</select>

<label for="image">image</label>
<input type="file" name="image" id="image">


<textarea name="content" id="content" cols="30" rows="10"></textarea>

    
    <button type="submit">stwórz</button>
    
    </form>


@endsection