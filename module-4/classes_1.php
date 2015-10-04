<?php
/**
 * Created by PhpStorm.
 * User: Traci
 * Date: 10/1/2015
 * Time: 6:49 PM
 */


// This is called defining the class //
class Person
{

    public $name;                         // these are properties, variables inside of class //
    public $age;
    public $location;

    protected $socialSecurity;

    private $bankAccount;

    // This is a method, because its in a class //

    function isThisPersonCool()
    {

        if ($this->location == 'Austin') {
            return "Yeah you are cool";
        } else {
            return "No your not";
        }
    }
}







// This is when you use the class  //
// i.e. instantiate the class into an object  //
// class is factory/blueprint, object is the car, one version of the classes capability //
// each object //
// class represents abstract  //
// define properties in a class thru public //

$chelsea  = new Person();
$chelsea->name = "Chelsea";
// Assigning data to properties //
$chelsea->age = 24;
// could do this with standard class but instead //
$chelsea->location = "Austin";


$samir = new Person();
$samir->location = "Austin";
$samir->age = 31;
echo $samir->isThisPersonCool();

// this refers to whatever the instantiated instance is //

// SCO is and array accessed using arrow notations instead of bracket //
// regular classes are data and functionality  //



// a function is a function when its outside class, when inside a class  //
// it is a method (even though says function) //



?>