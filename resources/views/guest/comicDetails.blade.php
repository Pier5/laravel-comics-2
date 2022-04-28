@extends('guest.template.base')

@section('title', 'Comics - Info')

@section('content')
    <h2>{{ $comic['title'] }}</h2>
    <h2>{{ $comic['series'] }}</h2>
    <img src="{{ $comic['thumb'] }}" alt="">
@endsection