<?php

include 'dbConnection.php';

//print_r($conn);

$state = $_POST["State"];
$mountain = $_POST["Mountain_Name"];
$elevation = $_POST["Highest_Elevation"];

$sql = "INSERT INTO Mountains (State, Mountain_Name, Highest_Elevation)
VALUES('$state', '$mountain', '$elevation')";

?>


<!DOCTYPE html>

<html lang="en">

	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

  		<title>Highest State Elevation</title>

	<link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/starter-template.css" rel="stylesheet">

	</head>

	<body>
		
	<?php include 'nav.php' ?>

		<div class="container">
			<div class="starter-template">

			<?php

				if ($conn->query($sql) === TRUE) {
					echo "<h1>New mountain added successfully</h1><br>";
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}

				$conn->close();
			?>

			<button type="button" class="btn btn-success"><a href="TrailForm.php">Add a Trail</a></button>

			<button type="button" class="btn btn-warning"><a href="index.php">Back to Index</a></button>

			</div> <!--starter template-->
		</div> <!--container-->


	</body>

<html>
