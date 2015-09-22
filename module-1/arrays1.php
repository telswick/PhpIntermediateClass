<?php
/**
 * Created by PhpStorm.
 * User: Traci
 * Date: 9/17/2015
 * Time: 6:59 PM
 */


$pets = ['dog', 'cat', 'beast'];
$flowers = ['rose', 'sunflower', 'mayflower'];

// 1.  merge both these arrays together
// 2. sort the arrays alphabetically, once merged
// 3. count the number of elements in the array
// optional 4. Create a comma separated string from the arrays

$mergearray = array_merge($pets, $flowers);
print_r($mergearray);

$sortarray = sort($mergearray);
// sort(&array)  means passing in array by reference, sorts in place, does not return anything
print_r($sortarray);

$countarray = count($sortarray);
print_r($countarray);
echo "This array has " . count($mergearray) . ' elements' . PHP_EOL;

$newarray = implode($sortarray);
echo $newarray;

$data = '"Samir", "Austin", "31", "Loves dogs", "Does not love cockroaches"';

$dataarray = explode(",", $data);
print_r($dataarray);

$newData = array('cofee', 'juice', 'milk');
echo implode('._.', $newData) . PHP_EOL;

// remember cntrol alt L to reformat, look up psr-1 and psr-2 and standard_8.php

if(in_array('dog', $mergearray))  {
    echo 'You have a dog';
}           // returns boolean so can use in if statement
            // needle and then haystack

// look up http error codes on wikip

// can use if, elseif, elseif, else to display different error messages, but sub-optimal way
// if ($statuscode == 500) {

$statusCode = 500;

switch($statusCode)  {

    case ($statusCode <= 600 && $statusCode >= 400):
        echo 'internal server error for a range';
        break;
    case 301:
        echo 'Redirect';
        break;
    case 200:
        echo 'Everything is cool';
        break;
    default:
        echo 'I have no idea';
}



