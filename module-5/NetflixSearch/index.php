<?php
/**
 * Created by PhpStorm.
 * User: Traci
 * Date: 10/18/2015
 * Time: 9:00 PM
 */

?>

<head>
        <title>Netflix Search</title>

        <style>
h1 {
    color:blue;
    font-family:verdana;
                font-size:200%;

            }
            h2  {
    color:blue;
    font-family:verdana;
                font-size:150%;
            }
            p  {
    color:darkblue;
    font-family:verdana;
                font-size:100%;
            }
        </style>

</head>

<?php

include ('vendor/autoload.php');
include ('NetflixSearch.php');

// Remember to use urlencode on user inputs

?>

<html>

<body style="background-color:lightblue">

        <image src="http://picturetwelve.com/wp-content/uploads/2013/04/netflix11.png" height="150" ></image>



        <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
            <p>Enter Title: <input type="text" name="title" size="30"/>
            Enter Year: <input type="text" name="year" size="10"/>
            Enter Director: <input type="text" name="director" size="30"/>
            Enter Actor: <input type="text" name="actor" size="30"/>
            <p><input type="submit" value="Go Search Netflix!"/>
        </form>

        <hr/>


        <?php


        // use strtolower htmlentities  to clean expected API input
        // (also look at urlencode)



        ?>




</body>

</html>

<?php

if ($_POST)
{
    // if (!$_POST['title']) {$_POST['title'] = "null";}
    $title = urlencode($_POST['title']);

    // if (!$_POST['year']) {$_POST['year'] = "null";}
    $year = urlencode($_POST['year']);

    if (!$_POST['director']) {$_POST['director'] = "";}
    $director = urlencode($_POST['director']);

    if (!$_POST['actor']) {$_POST['actor'] = "";}
    $actor = urlencode($_POST['actor']);



    echo "<pre>";
    // echo $title . " " . $year . " " . $director . " " . $actor;

}

// Add section here for client usage

use GuzzleHttp\Client;        // use not allowed inside a function, move back to index

$client = new Client([
    // Base URI is used with relative requests
    // 'base_uri' => 'http://httpbin.org',
    'base_uri' => 'http://netflixroulette.net/api/api.php/',
    // You can set any number of default request options.
    'timeout'  => 2.0,
]);

$search = new NetflixSearch();
$search->setTitle($title);
$search->setYear($year);
$search->setDirector($director);
$search->setActor($actor);



$test = $search->performSearch();       // PROBLEM here is that class/method isn't actually doing the search work

// echo $test;
// die();

// Send a request to http://netflixroulette.net/api/api.php
//  http://netflixroulette.net/api/api.php?title=Attack%20on%20titan
$response = $client->request('GET', $test);
// Send a request to https://foo.com/root
// $response = $client->request('GET', '/root');

// $result = file_get_contents($filename);

$body = $response->getBody();                // gives json output
// echo $body;

$resultarray = json_decode($body);           // json_decode expects string not object



// Move section below to class NetflixSearch, starting from use Guzzle

    // method performSearch gives back $resultarray

// Move section above to class NetflixSearch

echo '<pre>';
// print_r($resultarray);                      // getting array of standard class objects, how to pick which one(s)?

// Make a table format to display results
// Cannot use object of type stdClass as array
// trying to get property of non-object??? was working earlier

$source = $resultarray -> poster;
// echo $source;

echo "<h2>Movie Title: " . $resultarray -> show_title . '<br/></h2>';
?>
<html><img src="<?php echo $source; ?>" height="150"></html>
<?php
echo "<p>Summary: " . $resultarray -> summary . '<br/></p>';
echo '<br/>';
echo "<p>Year of Release: " . $resultarray -> release_year . '<br/></p>';
echo "<p>Rating: " . $resultarray -> rating . '<br/></p>';
echo "<p>Category: " . $resultarray -> category . '<br/></p>';
echo "<p>Cast: " . $resultarray -> show_cast . '<br/></p>';
echo "<p>Director: " . $resultarray -> director . '<br/></p>';
// echo "<p>Summary: " . $resultarray -> summary . '<br/></p>';
// echo "<p>Poster: " . $resultarray -> poster . '<br/></p>';
echo "<p>Length: " . $resultarray -> runtime . '<br/></p>';













?>


