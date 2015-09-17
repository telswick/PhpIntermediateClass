<?php

//  email Samir my github name
// try php as command in powershell
// command slash toggles on/off comments
// reformat code command option l (CNTR ALT L ON pc)


echo "hi ";

// phpinfo();

//$var = 'foo';

/*
 * This one
 * spans many
 * lines
 */


/*
 *
 */

// below /** enter autocomments, add information, add in @return
// /** works for documenting functions
/**
 * This function does nothing
 * This is known as standard doc-block notation
 * This is known as phpDocumentor, phpdoc.org shows tags like @param and @return
 * @param string $name First name only
 * @param int $age Age as a number only
 * @return int
 */
function foo($name, $age)
{
    return 12;
}

echo 'I am here';
echo "\n";
echo "<br/>";
// strings are in either single or double quotes
// but for special characters like \n, so double quotes means not to interpret exactly what's in quotes
// "br" is html tag not control characters, browser doesn't know control characters
// after vagrant ssh, do cd /var/www
echo 'So am i';


//Define some variables and assign values
$personName = 'Jane Doe';  // string
$personAge = 26; // int
$bankBalance = 17.45; // float
$isCool = false; // bool
// strings, integers, floats, boolean


$fruits = ['orange', 'apple', 'papaya', 34, 53.2, array(['foo','bar'])];   //array

$pets = array('dog','cat','giraffe', 34, 53.2);   // another way to array


// pre preformats output


echo '<h4>Fruits</h4>';
echo '<pre>';
print_r($fruits);
echo '</pre>';

echo '<h4>Pets</h4>';
echo '<pre>';
print_r($pets);
echo '</pre>';


// to access item in array

echo 'Value:' . $pets[4] . '<br/>';


// Associative arrays
// key points to value

$user = array(
    'name' => 'Samir',
    'age' => 31,
    'location' => 'Austin'
);


echo '<h4>Associative Array</h4>';
echo '<pre>';
print_r($user);
print_r($user['name']);
echo '</pre>';

#Standard Class Objects

// different from array,

$user2 = new stdClass();
$user2->name = 'Samir';
$user2->age = 31;
$user2->location = 'Austin';

echo 'Standard Class object';
echo '<pre>';
print_r($user2);
echo '</pre>';

// difference is in how you access data
// $user['location']
// print_r($user2->location);
// when a function is inside of a class it's a method, it's a function outside of class
// use arrow to represent properties in classes









?>