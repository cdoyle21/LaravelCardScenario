@extends('app')

@section('content')

    <h1>Deal Cards</h1>

    <h2>Shuffled Cards</h2>

    @foreach($shuffledDeck as $shuffled)
        {!! $shuffled !!}
    @endforeach

    <h2>Dealt Cards</h2>

    @foreach($dealtCards as $dealt)
            <h3>Hand</h3>
            {!! implode(' ', $dealt) !!}
    @endforeach

    {{--@for($i = 0; $i < 7; $i++)
        The current value is {{ $i }}
    @endfor--}}

    {{--@php
        var_dump($dealtCards)
    @endphp--}}

@stop