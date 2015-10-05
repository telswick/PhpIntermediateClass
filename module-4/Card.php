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
     * Create an HTML icon for this card, given suit and rank
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
        echo $cardIcon = "<img src=$source width='3.0%'>";    // move to render




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


}  // end of class Card


/**
 * Class Deck represents a deck of cards and some common operations around a deck
 * Represents a deck of 52 cards
 * Functionality: shuffle the deck, get a card from the deck and
 * count the number of remaining cards
 */
class Deck
{
    /**
     * Array of shuffled cards
     * @var array Card[]
     */
    protected $Cards = array();

    /**
     * Create a deck and shuffle it
     */
    public function __construct()
    {
        // Create all cards in this deck
        $this->createCards();
        // print_r($Cards);
        // die("after createCards in construct");

        // Shuffle all the cards to begin with
        $this->shuffle();
        // print_r($Cards);
        // die("after shuffle in construct");
    }

    /**
     * Create all the necessary cards
     * @return void
     */
    protected function createCards()
    {
        $suits = array('D', 'H', 'S', 'C');
        $ranks = array_merge(array('A'), range(2, 10), array('J', 'Q', 'K'));

        foreach($suits as $suit)
        {
           foreach($ranks as $rank)
           {
              $Cards[] = "$suit" . "$rank";
           }
        }
        echo "<br><br>";
        print_r($Cards);
        // die("on line 277, print cards");
        echo "<br><br>";




    }

    /**
     * Get a random card from the deck, make sure that the card you get is not in the deck anymore
     * @return Card
     */
    public function getCard()
    {


    }


    /**
     * Shuffle all cards in the deck
     * @return void
     */
    public function shuffle()
    {

        // copying from hw2 below
        // change $deck to $Cards

        // print_r($Cards);
        echo count($Cards);
        $lastcard = count($Cards) - 1;
        // echo "<br>" . "last card " . " = " .  $lastcard;

        for ($x = $lastcard; $x >= 0 ; $x--) {
            // $x counts down from 51 to 0
            $randomindex = rand(0, $x);
            $randomcard = $Cards[$randomindex];     // chooses random card from remaining cards
            // echo "random index is:  " . $randomindex . "---> ";
            // echo "random card is:  " . $randomcard . "  ";
            // replace current last card in deck ($x), with random (shuffled) card
            // also need to remove chosen, random card
            // try using unset($array[element])
            // without losing or writing over current last card in deck
            // random index can repeat, but random card cannot repeat
            // Joe says maybe try doing swap 1-1 cards repeatedly
            $temp = $randomcard;                // hold $randomcard in temp
            unset($Cards[$randomindex]);        // remove value/placeholder for $randomcard
            $Cards = array_values($Cards);      // to reindex array
            $Cards[] = $temp;                   // move $randomcard to current last card in deck
            // echo "<br><br>";
            // die('stop after 1 iteration of for loop');

            // filling in shuffled cards from end of deck -> front of deck

            print_r($Cards);

            // copying from hw2 above
        }
    }


    /**
     * How many cards are in this deck?
     * @return int
     */
    public function getNumCards()
    {


    }



}  // end of class Deck


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


// Create a deck and shuffle it
$deck1 = new Deck();
$deck1->shuffle();

