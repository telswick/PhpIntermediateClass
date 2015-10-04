<?php
/**
 * Created by PhpStorm.
 * User: Traci
 * Date: 10/1/2015
 * Time: 8:15 PM
 */



class DatabaseManager
{
    /**
     *
     * @var bool
     */
    public static $shouldCache;


    /**
     * Get some data from the DB
     * @return array
     */
    public function getData(){

        // This comes from a database
        return array('persian', 'bob', 'tabby', 'stray');
    }

    /**
     * @return array
     */
    public static function getStaticData()  {
        return array('weiner', 'pug', 'beast', 'furry');
        // can call the function data directly from the class instead of making
        // a new instance of the class
    }

}


$query = new DatabaseManager();
$data = $query->getData();

echo '<pre>';
print_r($data);


$staticData = DatabaseManager::getStaticData();
DatabaseManager::$shouldCache = true;
print_r($staticData);    // no need to instantiate another object




// For card game
// have these actors: card, deck, player, dealer

// card: suit, rank, color, draw()
// deck: card[], shuffle(); getcard()
// player: name, card[], receiveCard (card $card);
// dealer: deck(card[]), deals()
// Deals(): deck::shuffle()
    // go through each player
       // deck::getCard();
       // give it to player


// all objects are passed by reference!!!! don't need &

// properties are data
// methods are functionality
