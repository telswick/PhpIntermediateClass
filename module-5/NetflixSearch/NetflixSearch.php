<?php
/**
 * Created by PhpStorm.
 * User: Traci
 * Date: 10/18/2015
 * Time: 8:09 PM
 */

/*
The goal is to create a class called NetflixSearch that will perform this task.

This is the API URL you will be using

http://netflixroulette.net/api/api.php
Following are currently supported search parameters. Be sure to create getters/setters for each of these.

Optional Parameters

title (string)
year (number)
director (string)
actor (string)
*/

class NetflixSearch
{

    /**
     * @var string Title of movie
     */
    public $title;

    /**
     * @var int Year of movie release
     */
    public $year;

    /**
     * @var string Director of movie
     */
    public $director;

    /**
     * @var string Actor in movie
     */
    public $actor;

    // function __construct($title, $year, $director, $actor)
    // {
    //     $this->title = $title;
    //     $this->year = $year;
    //     $this->director = $director;
    //     $this->actor = $actor;
    // }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param int $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * @return string
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * @param string $director
     */
    public function setDirector($director)
    {
        $this->director = $director;
    }

    /**
     * @return string
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * @param string $actor
     */
    public function setActor($actor)
    {
        $this->actor = $actor;
    }


    public function performSearch()
    {
    //  use GuzzleHttp\Client;        // use not allowed inside a function, move back to index

        // $client = new Client([
            // Base URI is used with relative requests
            // 'base_uri' => 'http://httpbin.org',
            // 'base_uri' => 'http://netflixroulette.net/api/api.php/',
            // You can set any number of default request options.
            // 'timeout'  => 2.0,
        // ]);

        // $test1 = '?title=Attack%20on%20titan';
        // $test2 = '?title=The%20Boondocks&year=2005';

        // $test = '?title=Forrest%20Gump';    // Works if only using one search parameter, ie title
        // $test = '?title=Chef';


        $data = array('title'=>$this->title,
            'year'=>$this->year,
            'director'=>$this->director,
            'actor'=>$this->actor);


        $test = http_build_query($data, '', '&amp;', $enc_type = PHP_QUERY_RFC3986);
        // $test = http_build_query($data, '', ' ', $enc_type = PHP_QUERY_RFC3986);


        // why do I have to prepend ? to test, why can't put it at end of base uri?
        $test = "?" . $test;        // ?title=Forrest&year=1994&director=Robert&actor=Hanks
        // why are spaces being encoded as %2B instead of %20?????
        $test = str_replace("%2B","%20", $test);    // try doing a string replace to get %20 for spaces
        // well that works, but shouldn't have to

        return $test;     // try returning test because $client->request doesn't work from here


// echo "<br>";
// echo $test;                 // ?title=Forrest&year=1994&director=Robert&actor=Hanks
// die("setting up test for query");
// getting this
// title=gump&year=1994&director=&actor=hanks
// want this
// ?title=gump&year=1994&actor=hanks
// getting %3F in front of title
// foo=bar&baz=boom&cow=milk&php=hypertext+processor
// foo=bar&amp;baz=boom&amp;cow=milk&amp;php=hypertext+processor

    }





}