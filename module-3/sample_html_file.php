 <?php
/**
 * Created by PhpStorm.
 * User: Traci
 * Date: 9/24/2015
 * Time: 7:05 PM
 */

 // ajax asynchronous js and xml, ajax is a concept
 // jquery is a library

 ?>

<!DOCTYPE html>
<html>
<head>
    <!-- This is where your JS and CSS references go -->
    <style type="text/css">
    body {
    font-family: verdana;
        }

        .inputbox {
    font-size: 1.2em;
            color: orange;
        }
    </style>

    <script type="text/javascript" language="javascript">

        /**
         * When a user clicks the button, this function gets called
         * in js use console.log for var_dumps, goes to console in browser
         * search within DOM panel, js purpose is to edit DOM, all of the different elements
         * of your html web page (how to access from chrome, may be elements)
         * see book by Jon Duckett,
         * also eloquent javascript
         * need to master AJAX calls
         * js for cats
         * javascript in it's own file
         * <script "src=scripts.js" with end script tag
         */

        function myClickFunction() {

            var person_name = document.getElementById('pname').value;

            // If they didn't enter a name, show an error message
            if (person_name == "") {
                alert('Please enter a person name');
            } else {
                alert('You entered ' + person_name);
            }
        }
    </script>
</head>
<body>

<h3>HTML is cool</h3>

Enter Name: <input type="text" name="person_name" id="pname" size="20" class="inputbox"/>

<br/> <!-- This is a HTML comment -->

<input type="button" value="Click Me" onclick="myClickFunction();" class="inputbox"/>
</body>
</html>
