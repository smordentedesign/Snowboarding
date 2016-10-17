<?php
include 'dbConnection.php';

$trail_id = $_GET['trail_id'];
$sql = "DELETE FROM Trails WHERE id=$trail_id";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Delete Trail</title>

    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/starter-template.css" rel="stylesheet">


  </head>

    <body>
        <?php include 'nav.php' ?>  
        <div class="container">
            <div class="starter-template">

                <?php
                if ($conn->query($sql) === TRUE) {
                    echo "<h1>Record deleted successfully</h1>";
                } else {
                    echo "Error deleting record: " . $conn->error;
                }
                $conn->close();
                ?>

                <div class="button">
                    <button><a href="index.php">Back to Index</a></button>
                </div>
            </div>
        </div>
    </body>
</html>