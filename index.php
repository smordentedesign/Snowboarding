
<!--PHP select start-->
<?php

include 'dbConnection.php';

$sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
        Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
FROM Trails JOIN Mountains ON Mountains.ID = trails.Mountain_ID";

$result = $conn->query($sql);

?>
<!--PHP select end-->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   

    <title>Ski & Snowboard Mountains</title>

    
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/starter-template.css" rel="stylesheet">
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">



</head>

    <body>

        <?php include 'nav.php' ?>


        <div class="container">
            <div class="starter-template">
                <h1>Ski & Snowboard Mountains</h1>
                <h2><a href="MountainForm.php">Add a mountain</a></h2>
                <h2><a href="TrailForm.php">Add a trail</a></h2>
            </div>



            <?php

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo 
                    $row['Mountain_ID'] . " | " . 
                    $row['Trail_Name'] . " | " . 
                    $row['Mountain_Name'] . " | " . 
                    $row['State'] . " | " . 
                    $row['Mountain_Name'] . " | " . 
                    $row['Highest_Elevation'] . 
                    " | <a href=deleteTrail.php?trail_id=" . $row['trail_id'] ."> delete</a>" .
                    " | <a href=TrailForm.php?trail_id=" . $row['trail_id'] ."> update</a>" . "<br>";
                }
            }
            ?>


        </div><!-- /.container -->


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>


    </body>

</html>
