<?php
/**
 * Created by PhpStorm.
 * User: Traci
 * Date: 9/22/2015
 * Time: 7:58 PM
 */

// Take a string large number as argument in a function, add 1 to it, and return result as a string
// Numbers are limited, but strings are not
// just numbers, no commas
// 1. Take string #
// 2. Add 1 to number
// 3. return as string
// Use arrays!  an array of numbers with a domino effect
// can find index of string same as for array


$stringnum = "12345678901234567890";
$a = "19999";

function stringadd1($string)
{
    $lastIndex = strlen($string);
    if ($string[$lastIndex] < 9) {
        ++$string[$lastIndex];
        return $string;
    } else {
        $indexFirstNonNine = GetFirstNonNineIndex;
        ++$string[indexFirstNonNine];
        for ($i = (indexFirstNonNine + 1); $i < strlen($string); $i++) {
            $string[$i] = "0";
        }
    }

    function GetFirstNonNineIndex($numArray)
    {

        // count backwards until you hit first non 9
        // return that index
        // look at conversion between character to integer to_number function maybe
    }

    // Brennon's code above
    // Here's my code below
    $newstring = str_split($string, 1);
    echo $newstring;
    $expstring = explode(" ", $newstring);

    print_r($expstring);
    $newlast = $expstring['last'] + 1;


    return $newstring;


// using $a as example, "19999"

// for($i = $last; $i >= 0; $i-- )  {
    // $firstnonnine =
    //$t = $string['$i'];
    // while($a)
    // if($t == "9")
        // while the next number to the left is 9 use a while
        // find first non-nine


}




// call function on

stringadd1($stringnum);





// now moving on to creating hash table for fast index lookups
// hash table is like a dictionary
// to check a string for if a character occurs more than once
// use hash set functionality to see if we've hit

$i = "This is a string";
$array = array();
foreach($i as $character)  {
    if($i[$character]) {
        // if character is already in hash table go directly to it, don't
        // have to loop through entire array
    }
}



$numbers = Array(1,2,3,6,4,3);
print_r($numbers);
sort($numbers);





// help for hw2, read about by reference and by value passing of arguments into functions

function byref(&$val)
{
    // ++$val;  // by reference, modifies variable itself
    $val = $val + 1;
    return 1;  // different regardless of what is being returned

}

function byval($val)
{
    // ++$val;
    $val = $val + 1;
    return 1;

}

$num = 3;
echo $num . "\n";
byVal($num);
echo "After By Value:  " . $num . "\n";     // should be 3
byRef($num);
echo "After By Reference" . $num . "\n";  // should be 4, so retain any change to value, editing directly in memory,
// passed a value to function by
// reference in memory not a copy


// so for homework, shuffle deck should stay shuffled even outside of shuffle deck function
// when you deal, affects the deck, so should pass by reference
// not returning a brand new shuffled deck, only one deck just passing it around by reference

// instead do 2nd challenge for hw
// palindrome, exact same spelled forwards and backwards, like racecar
// $p = "racecar", p[0] is r
// creating new arrays and manipulating them
// create a function isPalindrome takes in a function and returns true or false
// use arrays to do so
// true if palindrome

// by reference is modifying it in memory; by val modifies

// keys are integers in hash table
// constructors in classes run when instantiated
// inherit from a class by using extend