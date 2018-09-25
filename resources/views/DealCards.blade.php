@extends('app')

@section('content')

    <h1>Deal Cards</h1>

    <h2>Straight Deck</h2>

    @foreach($deckOfCards as $deck)
        {!! $deck !!}
    @endforeach

    <h2>Shuffled Deck</h2>

    @foreach($shuffledDeck as $shuffled)
        {!! $shuffled !!}
    @endforeach

@stop