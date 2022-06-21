@extends('layouts.app')

@section('content')
{{-- Puntare il form alla rotta store --}}
<form action="{{route('games.update', $game->id)}}" method="post">
    @csrf

    @method('PUT')
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="fifa 98" aria-describedby="Type your game here">
    </div>

    <div class="form-group">
        <label for="thumb">Thumbnail</label>
        <input type="text" name="thumb" id="thumb" class="form-control" placeholder="http://myimage.png">
    </div>

    <div class="form-group">
        <label for="cover_image">Cover Image</label>
        <input type="text" name="cover_image" id="cover_image" class="form-control" placeholder="http://myimage.png">
    </div>

    <div class="form-group">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" id="description" cols="30" rows="5"></textarea>
    </div>

    <button type="submit">Add Game</button>
</form>
@endsection