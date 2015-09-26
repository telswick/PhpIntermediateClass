<?php
/**
 * Created by PhpStorm.
 * User: Traci
 * Date: 9/23/2015
 * Time: 2:41 PM
 */


// instead do 2nd challenge for hw
// palindrome, exact same spelled forwards and backwards, like racecar
// $p = "racecar", p[0] is r
// creating new arrays and manipulating them
// create a function isPalindrome takes in a function and returns true or false
// use arrays to do so
// true if palindrome

/**
 * @param string $string
 * @return string yes or no
 */
function isPalindrome($string)  {
    $revstring = strrev($string);
    // echo "<br>" . "Comparing " .  $string . " to " . $revstring . "...." . PHP_EOL;
    // now compare the two strings bitwise
    if (strcmp($string, $revstring) == 0) {
        return "yes";
    }
    else  {
        return "no";
    }


}



$mystring = "racecar";
echo "<br>" . "Is " . '"' . $mystring . '"' . " a Palindrome?:  " . isPalindrome($mystring) . PHP_EOL;

$mystring = "apple";
echo "<br>" . "Is " . '"' . $mystring . '"' . " a Palindrome?:  " . isPalindrome($mystring) . PHP_EOL;

$mystring = "AbcDeffeDcbA";
echo "<br>" . "Is " . '"' . $mystring . '"' .  " a Palindrome?:  " . isPalindrome($mystring) . PHP_EOL;

$mystring = "a man a plan a canal panama";
echo "<br>" . "Is " . '"' . $mystring . '"' .  " a Palindrome?:  " . isPalindrome($mystring) . PHP_EOL;

$mystring = "amanaplanacanalpanama";
echo "<br>" . "Is " . '"' . $mystring . '"' .  " a Palindrome?:  " . isPalindrome($mystring) . PHP_EOL;

?>
