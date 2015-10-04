<?php
/**
 * Created by PhpStorm.
 * User: Traci
 * Date: 9/30/2015
 * Time: 1:52 PM
 */

/**
Homework 03 - Countries on Earth

As an ongoing effort to understand more about the earth we inhabit, we are being asked to build a
single page web application that will help people explore countries.

The application will consist of a search bar that will allow the user to enter a name of a country.

You will then write some code that will make an API call out to this endpoint with the name of country,
http://restcountries.eu/rest/v1/name/Mongolia

You can get data from a URL using the file_get_contents() PHP method. The API will give you data back in JSON.

You may use json_decode() to decode this data into an array.

Once your data has been decoded, display the following details about the country:

Country Name
Capital
Region
Population (use number_format() to format this)
A comma separated list of all the languages spoken here
As a bonus, you may add some styling to your app to make it look aesthetically pleasing
*/

?>

<html>

    <head>
        <title>Countries on Earth</title>

        <style>
            h1 {
                color:blue;
                font-family:verdana;
                font-size:300%;

            }
            h2  {
                color:blue;
                font-family:verdana;
                font-size:200%;
            }
            p  {
                color:darkblue;
                font-family:verdana;
                font-size:160%;
            }
        </style>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

        <script>

            $(document).ready(function()  {

                // Bind to the click event of the button
                // In this case 'click' is the event, on the button
                // The second argument is what happens when the button is clicked
                $("#btn-fetch-data").on('click', function(){
                    console.log('I was clicked!');
                });

                // We need to get data from the server
                // Display it in the console!

                // Going to use ajax calls within framework to update without page refresh
                // Joe: ajax calls are asynchronous, not linear, can't depend on it to be done for following
                // turns into race condition
                // Didn't need to use ajax for this homework

                $.ajax({
                    url: "hw3countries.php",        // make separate file like getcountries, that contains the get file
                    dataType: "json",
                    method : "POST",
                    data: {
                        action : 'get_scores',
                        student : 'Samir Patel'
                    },
                    success: function(jsonData) {           // jsonData can be any variable, like foo
                        // console.log(jsonData);

                        for(key in jsonData) {

                            console.log('key=' + key);
                            console.log('value=' + jsonData[key]);
                        }

                        // This is where I can access each piece of the data
                        var name = jsonData.name;
                        var time = jsonData.time;
                        var countryname = jsonData.countryname;

                        $("#div-data").append(name + ' ' + time + '<br/');

                        // console.log('name = ' + name);
                        // console.log('time = ' + time);

                        // response(jsonData.results);
                    }
                });


                console.log('document is ready!');
            });

        </script>







    </head>

    <body style="background-color:lightgrey">

        <h1>Countries on Earth</h1>

        <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
    <p>Enter Country Name: <input type="text" name="country_name" size="30"/>
            <input type="submit" value="Get Details"/></>
        </form>

        <hr/>

        <?php

        // Check for an incoming POST request
        if ($_POST) {

            $countryName = $_POST['country_name'];
            echo 'The user entered: ' . $countryName;

            // Hint: To access data in a stdClass object use the -> operator
            // $data->name = 'Samir'; echo $data->name;

            // use strtolower htmlentities  to clean expected API input
            // (also look at urlencode)


        }
        ?>

</body>

</html>

<?php

// write some code that will make an API call out to this endpoint with the name of country,
// http://restcountries.eu/rest/v1/name/Mongolia

// get data from a URL using the file_get_contents() PHP method. The API will give you data back in JSON

// api endpoint iw where the data is served up
$filename = "http://restcountries.eu/rest/v1/name/$countryName";

// quick and easy way to fiddle with things, status code 2xx is all is ok
// look at http status codes

// put an & and it suppressed warning, don't do this
// look up packagist, guzzle use to make http requests
// bad country,

// if(!empty($countryJson))  {    put around after file_get_contents

$result = file_get_contents($filename);

// use json_decode() to decode this data into an array
// convert the received json into an array

$resultarray = json_decode($result);

// do an array_pop here to get only one of the results, pop off the
// data contained within the result set
// json-decode has another 2nd optional argument, $assoc = false standard class object
// $assoc = true gives back associative array

// some countries like us return multiple results, Jerry picks out all countries and uses buttons to show options
// or Samir does foreach($countryArray as $countryObject) around stuff, after if (!empty($countryArray
// and else echo malformed request

echo '<pre>';

// print_r($resultarray);

echo '</pre>';



echo "<h2>Country Name: " . $resultarray[0] -> name . '<br/></h2>';
echo "<p>Capital: " . $resultarray[0] -> capital . '<br/></p>';
echo "<p>Region: " . $resultarray[0] -> region . '<br/></p>';
echo "<p>Population: " . number_format($resultarray[0] -> population) . '<br/></p>';

echo "<p>Languages Spoken: ";
        foreach(($resultarray[0] -> languages) as $vals) {
            echo "<p>$vals" . ", " . '</p>';
        };

// error: trying to get property of non object ???  fixed by adding [0] after $resultarray
// need to format population number and
// go through languages as an array

   // could do implode with , separator on languages