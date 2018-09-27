<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Cards extends Model{

    public function deckOfCards ()
    {
        $suits = ['Heart', 'Club', 'Spades', 'Diamonds'];
        $values = ['A', 2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K'];

        $deckOfCards = Arr::crossJoin($suits, $values);

        $newDeckOfCards = array_map(function ($card) {
            return $card[1] . ' of ' . $card[0] . '<br />';
        }, $deckOfCards);

        return $newDeckOfCards;
    }

    public function shuffleDeck ()
    {
        $shuffledDeck = Arr::shuffle(Cards::deckOfCards());

        return $shuffledDeck;
    }

    public function deal($deckShuffled)
    {
        $hands = array(1 => array(), 2 => array(), 3 => array(), 4 => array());

        for ($i = 0; $i < 7; $i++) {
            $hands[1][] = array_shift($deckShuffled);
            $hands[2][] = array_shift($deckShuffled);
            $hands[3][] = array_shift($deckShuffled);
            $hands[4][] = array_shift($deckShuffled);
        }
        return $hands;
    }
}