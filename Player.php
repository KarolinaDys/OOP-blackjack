<?php

declare(strict_types=1);
require 'Suit.php';
require 'Card.php';
require 'Deck.php';
class Player
{
    private array  $cards;
    private bool  $lost = false;
    public function  Hit()
    {
    }
    public function Surrender()
    {
    }
    public function getScore()
    {
    }
    public function hasLost()
    {
    }
    /**
     * Get the value of cards
     */ 
    public function getCards()
    {
        return $this->cards;
    }

    /**
     * Set the value of cards
     *
     * @return  self
     */ 
    public function setCards($cards)
    {
        $this->cards = $cards;

        return $this;
    }
    //draw two card
    public function __construct(Deck $deck)
    {  
        $playerFirstCard = $deck->drawCard();
        $playerSecondCard = $deck->drawCard();
        $this->cards = [$playerFirstCard, $playerSecondCard];
}
    
}




