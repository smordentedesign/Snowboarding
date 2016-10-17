<?php
include 'dbConnection.php';

$Trails_ID = $_GET['ID'];
$sql = "DELETE FROM Trails WHERE id=$Trails_ID";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>#</title>



  </head>

  <body>


    <?php
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    $conn->close();
    ?>


		<a href="index.php">Back to Index</a>


		</body>
</html>