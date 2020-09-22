<?php

declare(strict_types=1);
class  Blackjack
{
   private $player;
   private  $dealer;
   private $deck;
   public function getPlayer()
   {
      return $this->player;
   }

   public function getDealer()
   {
      return $this->dealer;
   }
   public function getDeck()
   {
      return $this->deck;
   }

    public function __construct($player, $dealer){

        $this->deck = new Deck();
        $this->deck->shuffle();
        $this->player = new Player($this->deck);
        $this->dealer = new Player($this->deck);
    }

}