<?php
/**
 * Created by PhpStorm.
 * User: Traci
 * Date: 9/22/2015
 * Time: 7:29 PM
 */



// keys => values in an array
// too add create a new key and assign a value
// => is dereference operator

$zoo = array(
    'zone_1' => "Monkey",
    'zone_2' => "Giraffe",
    'zone_3' => "Rhino"

);

print_r($zoo);

$newZone = 'zone_4';
$newAnimal = "Lemur";

$zoo[$newZone] = $newAnimal;  // creates new value in array

$zoo['zone_2'] = "Gorilla";  // replace

unset($zoo['zone_1']);  // removes value from array

// can only store one object per key, could be an array inside of array
// associative arrays do not have indexes as keys, gives undefined offset
// unset does not shift in indexed array, use array_values function

print_r($zoo);
echo '\n';

