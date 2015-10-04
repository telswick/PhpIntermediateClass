<?php
/**
 * Created by PhpStorm.
 * User: Traci
 * Date: 10/1/2015
 * Time: 7:06 PM
 */



class PlayingCard
{
    public $suit;

    public $rank;

    public function _construct($suit, $rank)     // don't have to be same as values above
    {
        $this->suit = $suit;
        $this->rank = $rank;

    }




}



$aceofspades = new PlayingCard('Spades', 'Ace');

echo '<pre>';
print_r($aceofspades);