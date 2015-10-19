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

    function __construct($title, $year, $director, $actor)
    {
        $this->title = $title;
        $this->year = $year;
        $this->director = $director;
        $this->actor = $actor;
    }

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








}