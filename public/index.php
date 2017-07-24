
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <!-- <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script> -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/mainScript.js"></script>

    <title>Ali Mashreghi</title>

</head>


<body>

    <div class="container">

        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#aboutMe">About Me</a></li>
            <li><a data-toggle="tab" href="#resume">Resume</a></li>
            <li><a data-toggle="tab" href="#contact">Contact</a></li>
        </ul>


        <div class="tab-content">

            <!-- This tab shows a brief bio-->
            <div id="aboutMe" class="tab-pane fade in active">
                <?php include "aboutMe.php" ?>


            </div>

            <div id="resume" class="tab-pane fade">
                <?php include "resume.php" ?>
            </div> 

            <div id="contact" class="tab-pane fade"> <!-- Active because Google Map problem -->
                <?php include "contact.php" ?>
            </div> 

            <div id="map" style="display: none;"></div>
            <script>
                function initMap() {
                // console.log($('#contact').addClass('active'));

                var uluru = {lat: 48.461081, lng: -123.311536};
                var map = new google.maps.Map($('#map')[0], {
                    zoom: 14,
                    center: uluru
                });
                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map
                });

                initCanBeCalled = true;
            }
        </script>

        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDdIwEq7AStkseY6dXxenww85CbFoP1kFE&callback=initMap">
    </script>

</div> 

</div> <!-- container ends -->



</body>
</html>
