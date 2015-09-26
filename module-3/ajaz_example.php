<?php
/**
 * Created by PhpStorm.
 * User: Traci
 * Date: 9/24/2015
 * Time: 8:27 PM
 */



$classMates = array('alex', 'jerry', 'simon', 'samir', 'brian', 'traci', 'jared');
$max = count($classMates);

$x = rand(0, $max - 1);


echo $classMates[$x] . " is totally and completely awesome!";

echo '<pre>';
print_r($_SERVER);
echo '</pre>';


//  Get puts things in the url, post is not publicly visible in url
//  don't want to hardcode ajaz_example as action
// could variablize it echo($_SERVER['PHP_SELF]); inside of echos in action=
// php has 3 ways to get user input values
// $_GET, $_POST, $_REQUEST

echo 'GET:';
print_r($_GET);
echo '<br>';

echo 'POST:';
print_r($_POST);
echo '<br';

echo 'REQUEST:';
print_r($_REQUEST);
echo '<hr>';

echo $classMates[$index];    // need to append onto this


// this is about doing things in the background without refreshing webpage, append what is in
// text box onto the person's name
// read ahead on ajax  $.ajax  ($ is jquery object, ajax is a method on jquery object
// go to jquery website and search ajax
// ajax happens behind the scenes, during google search look at Net tab

// move php code underneath the form



// can code ternary expression to a variable to make easier to read
// $favoritePet = isset


?>

<html>

<head>

</head>


<body>

<form name="collectDataForm" action="ajaz_example.php" method="post">

    <input type="text" name="favoritePet" size="20"
           value="<?php echo(isset($_POST['favoritePet']) ? $_POST['favoritePet'] : null); ?>"  />
    <input type="submit" value="Do work!"/>

</form>

</body>



</body>
</html>