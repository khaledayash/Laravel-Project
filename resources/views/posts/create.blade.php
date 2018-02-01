@extends('layouts.app')

@section('content')
    <h1>Create Page </h1>

    <form method="post" action="{‌{ route('posts.store') }}">
        <input type="text" name="titel" placeholder="write a titel">
        <input type="submit" name="submit">
        {{csrf_field()}}
    </form>

@stop

@section('footer')
    <p>post me</p>
@stop

