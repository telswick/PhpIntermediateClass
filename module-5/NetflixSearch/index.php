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




use GuzzleHttp\Client;

$client = new Client([
    // Base URI is used with relative requests
    // 'base_uri' => 'http://httpbin.org',
    'base_uri' => 'http://netflixroulette.net/api/api.php/',
    // You can set any number of default request options.
    'timeout'  => 2.0,
]);

// $test1 = '?title=Attack%20on%20titan';
// $test2 = '?title=The%20Boondocks&year=2005';

$test = '?title=Forrest%20Gump';    // Works if only using one search parameter, ie title
$test = '?title=Chef';



// Now try using

echo "<pre>";
// echo $title . " " . $year . " " . $director . " " . $actor;

$data = array('title'=>$title,
    'year'=>$year,
    'director'=>$director,
    'actor'=>$actor);


$test = http_build_query($data, '', '&amp;', $enc_type = PHP_QUERY_RFC3986);
// $test = http_build_query($data, '', ' ', $enc_type = PHP_QUERY_RFC3986);



$test = "?" . $test;        // ?title=Forrest&year=1994&director=Robert&actor=Hanks
                            // why are spaces being encoded as %2B instead of %20?????
$test = str_replace("%2B","%20", $test);    // try doing a string replace to get %20 for spaces
                                            // well that works, but shouldn't have to


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


// Send a request to http://netflixroulette.net/api/api.php
//  http://netflixroulette.net/api/api.php?title=Attack%20on%20titan
$response = $client->request('GET', $test);
// Send a request to https://foo.com/root
// $response = $client->request('GET', '/root');

// $result = file_get_contents($filename);

$body = $response->getBody();                // gives json output
// echo $body;

$resultarray = json_decode($body);           // json_decode expects string not object

echo '<pre>';
// print_r($resultarray);                      // getting array of standard class objects, how to pick which one(s)?

// Make a table format to display results
// Cannot use object of type stdClass as array
// trying to get property of non-object??? was working earlier

$source = $resultarray -> poster;
echo $source;

echo "<h2>Movie Title: " . $resultarray -> show_title . '<br/></h2>';
?>
<html><img src="<?php echo $source; ?>" height="150"></html>
<?php
echo '<br/>';
echo "<p>Year of Release: " . $resultarray -> release_year . '<br/></p>';
echo "<p>Rating: " . $resultarray -> rating . '<br/></p>';
echo "<p>Category: " . $resultarray -> category . '<br/></p>';
echo "<p>Cast: " . $resultarray -> show_cast . '<br/></p>';
echo "<p>Director: " . $resultarray -> director . '<br/></p>';
echo "<p>Summary: " . $resultarray -> summary . '<br/></p>';
// echo "<p>Poster: " . $resultarray -> poster . '<br/></p>';
echo "<p>Length: " . $resultarray -> runtime . '<br/></p>';

















?>




<?php

