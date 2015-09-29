<?php
/**
 * Created by PhpStorm.
 * User: Traci
 * Date: 9/24/2015
 * Time: 5:59 PM
 */


/**
Homework 02 - Card Game

Today we are being asked to write a few functions that will help some of our other team members create a card game they are working on. Create the following functions

getDeck() - Returns an array of cards in a deck
shuffleDeck(&$deck) - Shuffle a deck of cards
deal($players, $numCards, &$shuffledDeck) - Deal a certain number of cards out to each player from the given deck
*/

// deck should decrement, like in real life
// function to shuffle deck by reference!!!!
// deal accepts array,, ie. pass an array into a function because you want to pass around entire code with changes
// replace A, J, Q, K
// use HTML entities for icons



/**
 * Return an array that represents a deck of cards
 *
 * e.g. array(
 *  0 => '1D', // Ace of diamonds
 *  1 => '2D', // 2 of diamonds
 *  ...
 *  11 => '11C' // Jack of clubs
 * )
 *
 * @return array
 */



function getDeck()
{

// Need to replace $i=0 with A, $i=11 with J, $i=12 with Q, and $i=13 with K
// Also there are no ones or elevens either DUH, or 14s

// for loop to populate Diamonds
    for($i = 0; $i < 13; $i++)  {
        $j= $i + 1;
        $deckarrayD[$i] =  "$j" . "D";
        switch ($i) {
            case 0:
                $deckarrayD[$i] = "A" . "D";
                // ok let's get fancy and try to replace with card images
                // $pic = <html><img src="d1.png"><?html>;
                // $deckarrayD[$i] = "<html><img src="/cards_png/d1.png/"></html>";

                break;
            case 10:
                $deckarrayD[$i] = "J" . "D";
                break;
            case 11:
                $deckarrayD[$i] = "Q" . "D";
                break;
            case 12:
                $deckarrayD[$i] = "K" . "D";
                break;
        }
    }

// for loop to populate Hearts
    for($i = 0; $i < 13; $i++)  {
        $j = $i + 1;
        $deckarrayH[$i] =  "$j" . "H";
        switch ($i) {
            case 0:
                $deckarrayH[$i] = "A" . "H";
                break;
            case 10:
                $deckarrayH[$i] = "J" . "H";
                break;
            case 11:
                $deckarrayH[$i] = "Q" . "H";
                break;
            case 12:
                $deckarrayH[$i] = "K" . "H";
                break;
        }
    }

// for loop to populate Clubs
    for($i = 0; $i < 13; $i++)  {
        $j = $i + 1;
        $deckarrayC[$i] =  "$j" . "C";
        switch ($i) {
            case 0:
                $deckarrayC[$i] = "A" . "C";
                break;
            case 10:
                $deckarrayC[$i] = "J" . "C";
                break;
            case 11:
                $deckarrayC[$i] = "Q" . "C";
                break;
            case 12:
                $deckarrayC[$i] = "K" . "C";
                break;
        }
    }

// for loop to populate Spades
    for($i = 0; $i < 13; $i++)  {
        $j = $i + 1;
        $deckarrayS[$i] =  "$j" . "S";
        switch ($i) {
            case 0:
                $deckarrayS[$i] = "A" . "S";
                break;
            case 10:
                $deckarrayS[$i] = "J" . "S";
                break;
            case 11:
                $deckarrayS[$i] = "Q" . "S";
                break;
            case 12:
                $deckarrayS[$i] = "K" . "S";
                break;
        }
    }

$deck = array_merge($deckarrayD, $deckarrayH, $deckarrayC, $deckarrayS );

    // echo "<pre";
    echo "Deck before shuffling: <br>";
    print_r($deck);
    echo "<br>";
    echo "<br>";
    // echo count($deck);
    // echo "<br>";
    // echo "<br>";
    // echo "</pre>";

return $deck;

}

/**
 * Shuffle the deck of cards
 *
 * @param array $deck Full deck of cards (passed by ref)
 *
 * @return void
 */

// choose random card (via index) for 1st card, remove card from deck, choose new random card (index is now
// reduced by 1)
function shuffleDeck(&$deck)
{
    // echo count($deck);
    $lastcard = count($deck) - 1;
    // echo "<br>" . "last card " . " = " .  $lastcard;

    for ($x = $lastcard; $x >= 0 ; $x--) {
        // $x counts down from 51 to 0
        $randomindex = rand(0, $x);
        $randomcard = $deck[$randomindex];     // chooses random card from remaining cards
        // echo "random index is:  " . $randomindex . "---> ";
        // echo "random card is:  " . $randomcard . "  ";
        // replace current last card in deck ($x), with random (shuffled) card
        // also need to remove chosen, random card
        // try using unset($array[element])
        // without losing or writing over current last card in deck
        // random index can repeat, but random card cannot repeat
        $temp = $randomcard;                // hold $randomcard in temp
        unset($deck[$randomindex]);         // remove value/placeholder for $randomcard
        $deck = array_values($deck);        // to reindex array
        $deck[] = $temp;                    // move $randomcard to current last card in deck
        // echo "<br><br>";
        // print_r($deck);
        // die('stop after 1 iteration of for loop');

        // filling in shuffled cards from end of deck -> front of deck

    }

    // return $deck;
}



/**
 * @param array $players      An array of player names
 * @param int   $numCards     How many cards to give each player
 * @param array $shuffledDeck A shuffled deck of cards
 *
 * @return array
 */
function deal($players, $numCards, &$shuffledDeck)
{
// need outer loop for # of players
    $numPlayers = count($players);
    $totalcardstodeal = $numPlayers * $numCards;
    $totalelements = $totalcardstodeal + $numPlayers;


    for ($cards = 0; $cards < $numCards; $cards++)  {       // cards from 0 to $numCards - 1; # of rounds of dealing
        $x = 0;                                             // need to start $x (index for deck) over at 0
        for ($y = 0; $y < $numPlayers; $y++)  {             // cards are removed from deck as they are dealt
                                                            // players from 0 to $numPlayers - 1 for each player
                                                            // 1st card $shuffledDeck[0] goes to player[0] card[0]
                                                            // give player x the number y of cards

        // $playerHands = [$players[$y] => $shuffledDeck[$x]];
            // $shuffledDeck = array_shift($shuffledDeck);     // array_shift to remove 1st card and reindex

            $temp = $shuffledDeck[$x];                      // hold $randomcard in temp
            unset($shuffledDeck[$x]);                       // remove value/placeholder for $randomcard
            $shuffledDeck = array_values($shuffledDeck);    // to reindex array
            // $playerHands = [$players[$y] => $shuffledDeck[$x]];
            $playerHands = [$players[$y] => $temp];         // problem: skipping a card when starting new round
            // $x = $x + 1;                                 // fixed: x = 0 always, first card of remaining deck

            echo "<br><br>";
            print_r($playerHands);


        }


    }

}


// ----------- USAGE -----------------

// Crack open a brand new deck of cards
$deck = getDeck();
// echo count($deck);
echo "<br>";

// Shuffle the deck (in place, so function called is by reference)
shuffleDeck($deck);

// echo "<br>";
echo 'Deck after shuffling, but before dealing: <br/>';
print_r($deck);
echo "<br>";

// die('got here after shuffling deck');

$players = array('Joe', 'Mary', 'Zim');
$numCards = 3;

$playerHands = deal($players, $numCards, $deck);

echo 'Hands each player has: <br/>';
print_r($playerHands);
echo "<br>";

echo 'Deck after dealing: <br/>';
print_r($deck);
echo "<br>";