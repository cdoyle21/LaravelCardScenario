@extends('app')

@section('content')

    <h1>Deal Cards</h1>

    @foreach($shuffledDeck as $shuffled)
        {!! $shuffled !!}
    @endforeach

@stop