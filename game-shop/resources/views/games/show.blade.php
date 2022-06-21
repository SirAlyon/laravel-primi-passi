@extends('layouts.app')

@section('content')
<img width="50" src="{{$game->thumb}}" alt="">
<span>{{$game->title}}</span>
<span>{{$game->description}}</span>
<img src="{{$game->cover_image}}" alt="">
@endsection