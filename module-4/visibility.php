<?php
/**
 * Created by PhpStorm.
 * User: Traci
 * Date: 10/1/2015
 * Time: 7:12 PM
 */



// @todo: show constructor overriding aka parent

/**
 * Class Animal
 */
class Animal {

    public $name;

    public $hasHair;

    protected $isWealthy;


}

class Human extends Animal
{
    public function _construct($isWealthy)
    {
        $this->isWealthy = $isWealthy;
    }

    public function checkWealth()  // add doc block above
    {
         if($this->isWealthy)  {
             return 'Yeah your doing good';

         }  else {
             return 'Do more work!';
         }

    }


}


// see getters and setters
// $dog->setIsWealthy(false)



$dog = new Animal();
$dog->name = 'Max';
$dog->hasHair = true;

$brian = new Human($isWealthy = true);   // creates var, sets value and sends to constructor

var_dump($brian);


// code needs to be in methods
// access protected properties from within methods

