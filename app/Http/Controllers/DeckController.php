<?php

namespace App\Http\Controllers;

use App\Cards;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class DeckController extends Controller {

    public function index (Cards $cards) {
        $shuffledDeck = Arr::shuffle($cards->deckOfCards());

        return view('DealCards')
            ->with('deckOfCards', $cards->deckOfCards())
            ->with('shuffledDeck', $shuffledDeck)
            ;

        //return view('DealCards', compact('shuffledDeck'));
    }

}