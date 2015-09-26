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
        $deckarrayC[$i] =  "$i" . "C";
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
        $deckarrayS[$i] =  "$i" . "S";
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
    print_r($deck);
    // echo "</pre>";

}

/**
 * Shuffle the deck of cards
 *
 * @param array $deck Full deck of cards (passed by ref)
 *
 * @return void
 */
function shuffleDeck(&$deck)
{

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

}


// ----------- USAGE -----------------

// Crack open a brand new deck of cards
$deck = getDeck();

// Shuffle the deck
shuffleDeck($deck);

echo 'Deck after shuffling, but before dealing: <br/>';
print_r($deck);

$players = array('Joe', 'Mary', 'Zim');
$numCards = 3;

$playerHands = deal($players, $numCards, $deck);

echo 'Hands each player has: <br/>';
print_r($playerHands);

echo 'Deck after dealing: <br/>';
print_r($deck);