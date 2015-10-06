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
    protected $st;

    /**
     * A, 2-10, J, Q, K
     * @var string
     */
    protected $rank;
    protected $rk;


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
    protected $cardIcon;

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
        $this->st = null;
        $this->rk = null;
        $this->icon = null;
        $this->cardIcon = null;

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
                $this->st = "d";
                break;
            case 'Heart':
                $this->st = "h";
                break;
            case 'Spade':
                $this->st = "s";
                break;
            case 'Club':
                $this->st = "c";
                break;
        }   // end of switch on suit

        switch($this->rank)  {
            case '2':
                $this->rk = '2';
                break;

            case '3':
                $this->rk = '3';
                break;

            case '4':
                $this->rk = '4';
                break;

            case '5':
                $this->rk = '5';
                break;

            case '6':
                $this->rk = '6';
                break;

            case '7':
                $this->rk = '7';
                break;

            case '8':
                $this->rk = '8';
                break;

            case '9':
                $this->rk = '9';
                break;

            case '10':
                $this->rk = '10';
                break;

            case 'A':
                $this->rk = '1';
                break;
            case 'a':
                $this->rk = '1';
                break;

            case 'J':
                $this->rk = 'j';
                break;
            case 'j':
                $this->rk = 'j';
                break;

            case 'Q':
                $this->rk = 'q';
                break;
            case 'q':
                $this->rk = 'q';
                break;

            case 'K':
                $this->rk = 'k';
                break;
            case 'k':
                $this->rk = 'k';
                break;

        }   // end of switch on $rank


        $this->icon = "cards_png/" . $this->st . $this->rk . ".png";
        // the cards will echo from here, but not in the render method?????
        echo $this->cardIcon = "<img src=$this->icon width='3.5%'>" . "   ";    // move to render
        // echo "showing cards from create Icon";




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

        echo $this->cardIcon = "<img src=$this->icon width='3.5%'>";    // moved to render

        return $this->cardIcon;

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
     * @var array Card[] $Cards
     */
    protected $Cards = array();
    protected $suits;
    protected $ranks;
    protected $newcard;

    // protected $suit;
    // protected $rank;



    /**
     * Create a deck and shuffle it
     */
    public function __construct()
    {
        $this->Cards = array();
        $this->suits = null;
        $this->ranks = null;
        $this->newcard = null;
        $this->cardigan = null;

        // $this->suit = $suit;
        // $this->rank = $rank;

        // $this->$Cards = $Cards;

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
        // $Cards = array();
        // $suits = array('D', 'H', 'S', 'C');
        $this->suits = array('Diamond', 'Heart', 'Spade', 'Club');

        $this->ranks = array_merge(array('A'), range(2, 10), array('J', 'Q', 'K'));

        foreach($this->suits as $suit)
        {
           foreach($this->ranks as $rank)
           {
               $this->newcard = new Card($suit, $rank);
               $this->Cards[] = $this->newcard;
           }
        }
        echo "<br><br>";
        // echo "<pre>";
        // print_r($this->Cards);
        // echo "</pre>";
        // die("on line 300, print cards");
        echo "<br><br>";




    }

    /**
     * Get a random card from the deck, make sure that the card you get is not in the deck anymore
     * @return Card
     */
    public function getCard()
    {
        // oops probably should have done this before shuffle
        // changing $shuffledDeck to $Cards

        // $Cards = array();
        // $this->suits = array();
        // $this->ranks = array();
        $this->cardigan = null;

        // get a random value from $suits and from $ranks

        // $x = $this->suits[rand(0, 3)];                        // for suits
        // $y = rand(0,12);                        // for ranks
        $this->cardigan = new Card('Diamond', '10');      // hold $randomcard in temp
        // print_r($cardigan);

        // unset($Cards[$x]);                       // remove value/placeholder for $randomcard
        // $Cards = array_values($Cards);           // to reindex array

        return $this->cardigan;

    }


    /**
     * Shuffle all cards in the deck
     * @return void
     */
    public function shuffle()
    {
        // echo "why doesn't it know what $ Cards is here????";  // now it does!
        // echo "<pre>";
        // print_r($this->Cards);
        // echo "</pre>";

        // copying from hw2 below
        // change $deck to $Cards

        // can't figure out why $Cards from createCards does not carry
        // over into shuffle method
        // try recreating $Cards here in shuffle

        // $Cards = array();

        // $Cards = array();
        // $suits = array('D', 'H', 'S', 'C');
        // $ranks = array_merge(array('A'), range(2, 10), array('J', 'Q', 'K'));

        // foreach($suits as $suit)
        // {
        //     foreach($ranks as $rank)
        //     {
                // $Cards[] = "$suit" . "$rank";
        //     }
        // }
        echo "<br><br>";
        // print_r($Cards);




        // print_r($Cards);
        // why is $Cards empty now????
        echo "count = " . count($this->Cards);
        $lastcard = count($this->Cards) - 1;
        echo "<br>" . "last card " . " = " .  $lastcard;

        for ($x = $lastcard; $x >= 0 ; $x--) {
            // $x counts down from 51 to 0
            $randomindex = rand(0, $x);
            $randomcard = $this->Cards[$randomindex];     // chooses random card from remaining cards
            // echo "random index is:  " . $randomindex . "---> ";
            // echo "random card is:  " . $randomcard . "  ";
            // replace current last card in deck ($x), with random (shuffled) card
            // also need to remove chosen, random card
            // try using unset($array[element])
            // without losing or writing over current last card in deck
            // random index can repeat, but random card cannot repeat
            // Joe says maybe try doing swap 1-1 cards repeatedly
            $temp = $randomcard;                // hold $randomcard in temp
            unset($this->Cards[$randomindex]);        // remove value/placeholder for $randomcard
            $this->Cards = array_values($this->Cards);      // to reindex array
            $this->Cards[] = $temp;                   // move $randomcard to current last card in deck
            // echo "<br><br>";
            // die('stop after 1 iteration of for loop');

            // filling in shuffled cards from end of deck -> front of deck

            // print_r($Cards);
            // echo "on line 336, after shuffle";

            // copying from hw2 above
        }

        echo "<pre>";
        echo "Now showing shuffled deck <br><br>";
        print_r($this->Cards);
        echo "</pre>";
    }


    /**
     * How many cards are in this deck?
     * @return int
     */
    public function getNumCards()
    {
        $numCards = count($this->Cards);
        echo $numCards;
        return $numCards;

    }



}  // end of class Deck


// $deck1 = new Deck();
// $card1 = new Card('Spade', '9');
// echo "<br><br><br>";
// $card2 = new Card('Diamond', 'A');
// echo "<br><br><br>";
// $card3 = new Card('Club', 'J');
// echo "<br><br><br>";
// $card4 = new Card('Heart', '10');
// echo "<br><br><br>";
// $card5 = new Card('Diamond', 'k');
// $card5 = new Card('Specs', 'k');
// echo $cardicon;
// print_r($deck1);


// Create a deck and shuffle it
// $deck1 = new Deck();
// $deck1->shuffle();

// Get a random card from the deck

// $deck1->getCard();


// Create a deck and shuffle it
$Deck = new Deck();
// shuffling twice and don't need to, new deck also shuffles
// $Deck->shuffle();

// print_r($Cards);

die("just after creating new $ Deck and shuffling it");

// Create two new players
$PlayerBob = new Player('Bob');
$PlayerSue = new Player('Sue');

// Give bob 3 cards
$PlayerBob->giveCard($Deck->getCard());
$PlayerBob->giveCard($Deck->getCard());
$PlayerBob->giveCard($Deck->getCard());

// Give sue 3 cards
$PlayerSue->giveCard($Deck->getCard());
$PlayerSue->giveCard($Deck->getCard());
$PlayerSue->giveCard($Deck->getCard());

// Show all the cards each player has been dealt
echo '<h3>'.$PlayerBob->getName().'</h3>';
echo $PlayerBob->render();
echo '<br/>';
echo '<h3>'.$PlayerSue->getName().'</h3>';
echo $PlayerSue->render();
echo '<br/>';
echo 'Number of cards remaining in the deck: '.$Deck->getNumCards();






// Add code above for instantiating, should be in index.php



