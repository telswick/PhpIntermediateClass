<?php
/**
 * Created by PhpStorm.
 * User: Traci
 * Date: 10/1/2015
 * Time: 8:41 PM
 */


/**
 * Class Card represents and encapsulates data
 * and functionality for a single playing card
 */
class Card
{
    // properties should be protected
    // Heart & Diamond = Red
    // Spades & Clubs = Black

    /**
     * @var array
     */
    private $allowedSuits = array('Heart', 'Diamond', 'Spade', 'Club');

    /**
     * Heart, Diamond, Spade or Club
     * @var string
     */
    protected $suit;

    /**
     * A, 2-10, J, Q, K
     * @var string
     */
    protected $rank;


    /**
     * Red or black
     * @var string
     */
    protected $color;

    /**
     * @varThis is the HTML icon for the card!
     * @var string
     */
    protected $icon;

    /**
     * Construct should only set properties
     * @param string $suit
     * @param string $rank
     * @throws Exception
     */
    public function __construct($suit, $rank)
    {
        $this->suit = $suit;
        $this->rank = $rank;

        // how do I get the color?
        // as soon as you make a card it should have a color, don't wait until render

        $this->checkSuit();

        $this->colorCard();

        $this->createIcon();

    }

    /**
     * Create a HTML icon for this card, given suit and rank
     * @return void
     */
    protected function createIcon()
    {

        switch($this->suit)  {
            case 'Diamond':
                $st = "d";
                break;
            case 'Heart':
                $st = "h";
                break;
            case 'Spade':
                $st = "s";
                break;
            case 'Club':
                $st = "c";
                break;
        }   // end of switch on suit

        switch($this->rank)  {
            case '2':
                $rk = '2';
                break;

            case '3':
                $rk = '3';
                break;

            case '4':
                $rk = '4';
                break;

            case '5':
                $rk = '5';
                break;

            case '6':
                $rk = '6';
                break;

            case '7':
                $rk = '7';
                break;

            case '8':
                $rk = '8';
                break;

            case '9':
                $rk = '9';
                break;

            case '10':
                $rk = '10';
                break;

            case 'A':
                $rk = '1';
                break;
            case 'a':
                $rk = '1';
                break;

            case 'J':
                $rk = 'j';
                break;
            case 'j':
                $rk = 'j';
                break;

            case 'Q':
                $rk = 'q';
                break;
            case 'q':
                $rk = 'q';
                break;

            case 'K':
                $rk = 'k';
                break;
            case 'k':
                $rk = 'k';
                break;

        }   // end of switch on $rank

        $source = "cards_png/" . $st . $rk . ".png";
        echo $cardIcon = "<img src=$source width='2.75%'>";    // move to render




    }


    /**
     * Check to see if the suit is valid?
     * @throws Exception
     * @return void
     */
    public function checkSuit()
    {
        if(!in_array($this->suit, $this->allowedSuits))  {
            throw new Exception(
                $this->suit . ' is not allowed! You can pass: ' .
                implode(',', $this->allowedSuits)
            );

        }

    }

    /**
     * Assign a color
     * @return void
     */
    protected function colorCard()
    {
        // do ifs to get colors
        if($this->suit == 'Heart' || $this->suit == 'Diamond') {
            $this->color = 'red';
        }  else  {
            $this->color = 'black';
        }

    }



    /**
     * Render a card for the browser. It's ok to return HTML
     * But in real life you want those concerns to be separated
     * @return string
     */
    public function render()
    {
      // data should be what it is not what it looks like, render could handle
      // the ampersand thingy

    }


    // do I want my card object to have functionality from outside or inside of itself
    // public; there is a thing called deck
    // private; color happens automatically to user
    // methods can be protected but extended and used
    // what you let the user of your code change, developer for other developers,
    // contracts have methods and properties,
    // method in card, example doing some really weird function that is only applicable and valid inside
    // of itself but not outside or to be extended


}


/**
 * Class Deck
 * Represents a deck of 52 cards
 * Functionality: shuffle the deck, get a card from the deck and
 * count the number of remaining cards
 */
class Deck
{
    /**
     * @var array Cards is an array of Card[]
     */
    protected $Cards;

    public function __construct()
    {



    }

    /**
     * @return void
     */
    protected function createCards()
    {


    }

    /**
     *
     */
    public function getCard()
    {


    }


    /**
     * @return void
     */
    public function shuffle()
    {


    }


    /**
     * @return int
     */
    public function getNumCards()
    {


    }



}


// $deck1 = new Deck();
$card1 = new Card('Spade', '9');
echo "<br><br><br>";
$card2 = new Card('Diamond', 'A');
echo "<br><br><br>";
$card3 = new Card('Club', 'J');
echo "<br><br><br>";
$card4 = new Card('Heart', '10');
echo "<br><br><br>";
$card5 = new Card('Diamond', 'k');
// $card5 = new Card('Specs', 'k');
// echo $cardicon;
// print_r($deck1);

