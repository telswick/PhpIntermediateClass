<?php
/**
 * Created by PhpStorm.
 * User: Traci
 * Date: 9/17/2015
 * Time: 8:24 PM
 */


// Function declaration


/**
 * @param string $name This is just the first name
 * @param string $location This is the state you live in
 * @param int $age
 * @return string
 */
function sayHello($name, $location, $age)
{

    return 'Hello! ' . $name . ' ' . $location . 'is awesome for a ' . ' year old';
}

// Function usage or calling the function
// sayHello();

$helloString = sayHello('Samir', 'TX', 31);

echo $helloString;


/*
 * 1. Create a function that accepts two arguments
 * The first argument is the object to print, make sure its an object
 * The second argument is a title to pring on top of the data
 */

function pre($data, $name = null)
{
    if (!empty($name)) {
        if(php-sapi_name()  == 'cli')  {
    // echo '<h3>' . $name . '</h3>';  to get rid of showing the h3 tags when you're running
    // file from the command line, ssh into vagrant and cd into var/www
            echo "\n";
            echo "------------------------------\n";
            echo $name . "\n";
            echo "------------------------------\n";
    if(is_object($data)  || is_array($data))  {

    echo "<pre>";
    print_r($data);
    echo "</pre>";  }

}  else {
        echo $data . "\n";
    }
}


$sapiName = php_sapi_name();
echo 'Server api: ' . $sapiName . "\n";

// in cli(command line) the sapi is cli

$pets = array('dog', 'cat', 'walrus');
// pre($pets, 'My pets');
pre('Sami');

// making it look nice in command line as well as browser
