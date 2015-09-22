<?php
/**
 * Created by PhpStorm.
 * User: Traci
 * Date: 9/17/2015
 * Time: 8:20 PM
 */

$name = 'Samir';

$simpleString = 'My name is $name\n';   // will show literal \n
$complexString = "My name is $name\"";
// \ is the escape character so you can get a literal extra "
echo $simpleString;
echo $complexString;