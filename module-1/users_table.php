<?php
/**
 * Created by PhpStorm.
 * User: Traci
 * Date: 9/17/2015
 * Time: 7:56 PM
 */


$users = array(
    array(
        'id' => 123,
        'name' => 'Samir',
        'location' => 'Austin'
    ),
    array(
        'id' => 789,
        'name' => 'Samir',
        'location' => 'Austin'
    )
);

// 1. Create a HTML table from this data that look
// like this
// 2. opt stripe each row a different color

?>

    <table>
    <tr>
        <th>Id </th>
        <th>Name </th>
        <th>Location</th>
    </tr>
    <tr>
        <th></th>

    </tr>
    <?php


// $x = 0;

foreach ($users as $index => $user)  {

    // % aka modulus operator
    if ($index % 2 == 0) {
        echo '<tr>';

    }  else {
        echo '<tr style="background-color:grey;">"';
    }

    //echo '<tr>';
    echo '<td>' . $user['id'] . '</td>';
    echo '<td>' . $user['name'] . '</td>';
    echo '<td>' . $user['location'] . '</td>';
    echo '</tr>';
    // $x++;
    // $even = if($x % 2)
}
?>
</table>
<?php