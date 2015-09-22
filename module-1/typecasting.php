<?php
/**
 * Created by PhpStorm.
 * User: Traci
 * Date: 9/17/2015
 * Time: 6:39 PM
 */

$value = 0;

$castedValue = (bool) $value;  // changing an integer to boolean type
$castedValue = (string) $value; // change type to string

echo '<pre>';


var_dump($value);

print_r($value);

var_dump($castedValue);

$user = new stdClass();
$user->name = 'Samir';
$user->location = 'Austin';

print_r($user);

// 1. convert user into an
// associative array
// $user is a standard class objects
// var_dump gives more info like type, than print_r

$newuser = (array) $user;

print_r($newuser);
var_dump($newuser);

// die() - run only up to this point, can also include a message in ('')
// exit() is the same thing
// \n
// echo PHP_EOL;  also a new line
//