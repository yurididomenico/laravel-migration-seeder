@extends('layouts.app')

@section('title-page', 'Houses-faker-php')

@section('main-content')

    <h1>Tutti i treni</h1>

    @foreach ($trains as $elem)

        <span>{{$elem->colonna1}}</span>

    @endforeach
@endsection
