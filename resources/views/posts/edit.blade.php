@extends('layouts.app')

@section('content')

    <h1>Edit Page</h1>


    <form method="post" action="‌{{route('posts.update', ['id' => $post->id]) }}">
        {{--<form method="post" action="{‌{ route('posts.store') }}">--}}
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="titel" placeholder="Enter Titel" value="{{$post->titel}}">
        <input type="submit" name="submit" value="UPDATE">

    </form>
    @stop