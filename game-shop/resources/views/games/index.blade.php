@extends('layouts.app')

@section('content')

<a class="btn btn-primary" href="{{route('games.create')}}">
Create Game
</a>
    <div>
        <span>ID</span>
        <span>THUMB</span>
        <span>TITLE</span>
        <span>DESC</span>
        <span>COVER</span>
    </div>

    @foreach ($games as $game)
    <hr>
        <div class="game">
            <span>{{$game->id}}</span>
            <span>
                <img width="150" src="{{$game->thumb}}" alt="">
            </span>
            <span>{{$game->title}}</span>
            <span>{{$game->description}}</span>
            <span>
                <img width="50" src="{{$game->cover_image}}" alt="">
            </span>
            <span>
                <a href="{{route('games.show', $game->id)}}">View</a> 
                - Edit - Delete</span>
        </div>
    <hr>
    @endforeach
    {{-- {{dd($games)}} --}}
@endsection