<?php
/**
 * Created by PhpStorm.
 * User: Traci
 * Date: 9/15/2015
 * Time: 8:50 PM
 */


$name = 'Samir';
$age = 31;
$location = 'Austin';
$bankBalance = 15.33;
$pets = array('dog', 'cat', 't-rex');

$fruit = new stdClass();
$fruit->name = 'Apple';
$fruit->color = 'Red';
$fruit->price = 4.33;

// php has set of functions starting with is_
// 2. Write if statements with is_* for each var

if(is_string($name))  {

    echo 'Name is a string<br>';

}   else {
        echo 'Name is not a string';
}


if(is_int($age))  {

    echo 'Age is an integer<br>';

}   else {
    echo 'Age is not an integer';
}



if(is_string($location))  {

    echo 'Location is a string<br>';

}   else {
    echo 'Location is not a string';
}


if(is_float($bankBalance))  {

    echo 'Bank balance is a float<br>';

}   else {
    echo 'Bank balance is not a float';
}

// ternary operator is another way to do it
echo(is_float($bankBalance) ? 'yes it is a float<br>' : 'no it is not a float');
echo "<br>";

if(is_array($pets))  {

    echo 'Pets is an array<br>';

}   else {
    echo 'Pets is not an array';
}

if(is_object($fruit)) {

    echo 'Fruit is an object<br>';

}   else  {
    echo 'Fruit is not an object';
}

if(is_string($fruit->name)) {

    echo 'Fruit->name is a string<br>';

}   else  {
    echo 'Fruit->name is not a string';
}