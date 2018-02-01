@extends('layouts.app')

@section('content')
    <h1>Index Page </h1>

    <ul>
    @foreach($posts as $post)

            <li>{{$post->titel}}</li>

    </ul>
    @endforeach
@stop

@section('footer')
    <p>Index</p>
@stop

