<?php
/**
 * Created by PhpStorm.
 * User: Traci
 * Date: 9/29/2015
 * Time: 7:26 PM
 */





$classMates = array('alex', 'jerry', 'simon', 'samir', 'brian', 'traci', 'jared');
$numClassmates = count($classMates);
$index = rand(0, $numClassmates - 1);
// echo $classMates[$index] . ' ' . date('Y-m-d h:i:s');

header("Content-Type:application/json");
echo json_encode(
    array(
        'name' => $classMates[$index],
        'time' => date('Y-m-d h:i:s')
    )

);

?>