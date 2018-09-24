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

}