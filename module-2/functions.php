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
 * The second argument is a title to print on top of the data
 */


/**
 * @param $data
 * @param null $name
 */
function pre($data, $name = null)
{
    if (!empty($name)) {
        if (php - sapi_name() == 'cli') {
            // echo '<h3>' . $name . '</h3>';  to get rid of showing the h3 tags when you're running
            // file from the command line, ssh into vagrant and cd into var/www
            echo "\n";
            echo "------------------------------\n";
            echo $name . "\n";
            echo "------------------------------\n";
            if (is_object($data) || is_array($data)) {

                echo "<pre>";
                print_r($data);
                echo "</pre>";
            }

        } else {
            echo $data . "\n";
        }
    }  // closes if name is not empty
}  // closes function pre


$sapiName = php_sapi_name();
echo 'Server api: ' . $sapiName . "\n";

// in cli(command line) the sapi is cli

$pets = array('dog', 'cat', 'walrus');
// pre($pets, 'My pets');
pre("Samir");

// making it look nice in command line as well as browser



// class on 9/22/15
// need to use explicit global to access inside of a function
//

$outsideFunction = "outside";

function TestFunction()
{
    $insideFunction = "inside";
    echo "Outside: " . $outsideFunction . "\n";
    echo "Inside: " . insideFunction . "\n";
}


TestFunction();

// Now onto Classes
// Classes are way to organize data, like a high level blueprint, must substantiate class to make an instance
// public, protected (inherits or extends father class has access)  and private (can only be used by the father class)
// way to control access to data (variables)



class Vehicle
{
    public $wheels;
    public $hydraulics;
    public $Brand;
    protected $safetyRating = "AAA";

    private $vin;


}

class SUV extends Vehicle
{
    public $name;
    public $price;
    public $someValue;
    // public $SUVSafety = $this->safetyRating;
    function __construct()  {
        $this->wheels = "front";
        echo "constructor called\n";
        // $SUVSafety = parent::$this->safetyRating;
        // constructor can be called with a parameter
    }  //called auto when substantiate class, initialize, this accesses anything in this class and above it

    public $SUVSafety;

}

function makeSuv()  {
    $Jeep = new SUV();
    // $Jeep->name = "Jeep";
    // $Jeep->wheels = "Offroad Tires";

    return $Jeep;
}

$myJeep = makeSUV();
echo "Jeep info: " . $myJeep->name . " " . $myJeep->wheels . "\n";
// echo "Jeep Safety: " . $myJeep->safetyRating;

// have to explicitly call the parents constructor
// Vehicle is parent, SUV is child







?>