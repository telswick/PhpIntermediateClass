


<html>

<head>
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

            $.ajax({
                url: "server_data.php",
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

<body>



<input type="button" value="Fetch Data" class="cls-buttonz" id="btn-fetch-data" />

<div id="div-data"></div>






</body>

</html>