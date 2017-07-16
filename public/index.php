
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">

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

            <div id="contact" class="tab-pane fade">
            </div> 

        </div> 

    </div> <!-- container ends -->


</body>
</html>
