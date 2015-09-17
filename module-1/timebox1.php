<?php
/**
 * Created by PhpStorm.
 * User: Traci
 * Date: 9/15/2015
 * Time: 8:41 PM
 */

// create an array containing the numbers 1 to 100,000


$myarray = [];

// or do it this way with range
$numbers = range(1, 100000);


// echo "Numbers are";

for($x = 1; $x <= 100000; $x++) {
    $myarray[] = $x;
}
    echo '<h3>Numbers are:</h3>';
    echo '<pre>';
    print_r($myarray);
    // print_r($numbers);
    echo '</pre>';
