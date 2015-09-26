<?php
/**
 * Created by PhpStorm.
 * User: Traci
 * Date: 9/24/2015
 * Time: 7:31 PM
 */


// Make a webpage that has three radio buttons and: yes, no, maybe so
// Have a textbox right under it with a "name" label
// And then have a button, when clicked, displays a message that says
// Yes we can hang out {name}
// how to get the value of radio button in javascript

?>

<!DOCTYPE html>
<html>
<head>

<!----  JS goes here  ----->

<script>

    function doWork()  {

        var personName = document.getElementByID('pname=').value;
        console.log('personName=' + personName);

        var hangOut = document.getElementsByName('hang_out');
        var checkedValue = null;

        for(var i = 0; i < hangOut.length; i++)  {

            var piece = hangOut[i];

            if (piece.checked)  {
                checkedValue = piece.value;
            }



            alert(personName + checkedValue);

            console.info(piece);
            console.log(i);

        }
    }

        console.warn(hangOut;)

</script>


<body>

<h3>Can we hang out??</h3>

<input type="radio" value="hang out" value="Yes">   Yes<br>
<input type="radio" value="hang out" value="No">   No<br>
<input type="radio" value="hang out" value="Maybe">   Maybe<br>

Enter Name: <input type="text" name="person_name" id="pname" size="20" class="inputbox"/>

<input type="button" value="click me!" onclick="doWork"/>

<br/> <!-- This is a HTML comment -->


</body>
</html>

<?php
// group radio buttons by name

