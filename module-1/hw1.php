<?php
/**
 * Created by PhpStorm.
 * User: Traci
 * Date: 9/17/2015
 * Time: 5:40 PM
 */

// Create an input string using heredoc syntax
$inputString
    = <<<MYSTR
Can you feel the pulse in your wrist? For humans the normal pulse is 70 heartbeats per minute.
Elephants have a slower pulse of 27 and for a canary it is 1000!
If all the blood vessels in your body were laid end to end, they would reach about 60,000 miles.
In one day your heart beats 100,000 times.
Half your body’s red blood cells are replaced every seven days.
By the time you are 70.5 you will have easily drunk over 12,000 gallons of water.
Coughing can cause air to move through your windpipe faster than the speed of sound – over a thousand feet
per second, this is a true statement!
Germs only cause disease, right? But a common bacterium, E. Coli, found in the intestine helps us digest
green vegetables and beans (also making gases – pew!). These same bacteria also make vitamin K, which
causes blood to clot. If we didn’t have these germs we would bleed to death whenever we got a small cut!
It takes more muscles to frown than it does to smile, this is not false and a fact.
That dust on rugs and your furniture is not only dirt. It’s mostly made of dead skin cells.
Everybody loses millions of skin cells every day which fall on the floor and get kicked up to
land on all the surfaces in a room. You could say, “That’s me all over.”
It takes food 7.64 seconds to go from the mouth to the stomach via the esophagus.
MYSTR;

// turn into a function to accept any string

countTypes($inputString);   // call the function

/**
 * @param string $anyString input string to countTypes
 */
function countTypes($anyString)
{

    /** @var array $countArray Result array that contains the counts. You will populate this array with appropriate numbers */
    $countArray = array('num_numeric' => 0, 'num_string' => 0, 'num_bool' => 0, 'num_messedup' => 0);

    /** @var array $wordArray Array of every word in the input string */
// explode converts a string into an array, separated by delimiter of a single space
// first need to remove characters: ? ! ( ) " " ' - .space , .tab
// don't remove periods inside of a numeric like 70.5
// do remove commas inside of numerics like 60,000
// let's try using the strtr function with a translation array, replace certain chars with empty
// replace , inside a number with empty, replace period-space with space
// ha, period space may be period tab! tricky
// also need !tab change to space
// Ok should have all the punctuation fixed now, but still may be more cases
// did brute force method, probably something more elegant
// still need to put boolean as first check, literal check for true and false  - CHECK
// need to make whole thing a function that takes in any string and returns the counts
// and make sure it works on cli
// and sometimes a space is more than a space!
// and found another mistake, count of strings/words should not include the booleans or numerics
// so use elseif s
// and is E Coli one word or two? assume it's two, same with vitamin K
// note to self look up preg_replace

    $arr = array("?" => "", "!" => "", "(" => "", ")" => "", "“" => "", ".”" => "", "’" => "", " – " => " ",
        ".
" => " ", ". " => " ", "," => "", "!
" => " ", ". " => " ", "
" => " ");

    $newinputString = strtr($anyString, $arr);

    $wordArray = explode(" ", $newinputString);

    print_r($wordArray);

// Need to use as a function
// Need to strip out special chars and punctuation
// Need to start with most specialized case first

    foreach ($wordArray as $val) {

        if ($val == "true" || $val == "false" || $val == "True" || $val == "False") {
            $countArray['num_bool'] += 1;
        } elseif (is_numeric($val)) {
            $countArray['num_numeric'] += 1;
        } elseif (is_string($val)) {
            $countArray['num_string'] += 1;
        }
        // if(is_bool($val))  {
        //     $countArray['num_bool'] ++;
        // }

        else
            $countArray['num_messedup'] += 1;  // should be 0

    }

    echo "<br><br>Here are the counter values: <br>";
    print_r($countArray);

// 30 & 47 as test cases to see what's happening with numbers

// $word30 = $wordArray['30'];
// $word47 = $wordArray['47'];

    echo "<br><br>";

    echo "There are " . $countArray['num_string'] . " words, "; echo "<br>";
    echo $countArray['num_bool'] . " booleans and ";  echo "<br>";
    echo $countArray['num_numeric'] . " numbers!";

}  // end of function countTypes

// echo is_numeric($word30) . " for " . $word30 . "<br>";
// echo is_numeric($word47) . " for " . $word47 . "<br>";

/*
function checkNumeric($var_name)
{
    if (is_numeric($var_name)) {
        echo "$var_name is Numeric.<br>";
    } else {
        echo "$var_name is not Numeric. <br>";
    }
}
*/

// checkNumeric($word30);
// checkNumeric($word47);


// from Samir, keep track of how many numbers, words(strings) punctuation is not a word
// booleans are like the word false
// write a function takes in input and returns $countArray
// hint use explode()
// is_*
// array assignment by key, $countArray['num_numeric'] +=1; take already and add