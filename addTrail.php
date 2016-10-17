<?php

include 'dbConnection.php';

//print_r($conn);

$mountain = $_POST['mountain_id'];
$trail = $_POST['Trail_Name'];


if (isset($_POST['trail_id']))
{
	$trail_id = $_POST['trail_id'];
	$sql = "UPDATE Trails SET Mountain_ID ='$mountain', Trail_Name='$trail' WHERE id = $trail_id";


}else {
	$sql = "INSERT INTO Trails (Mountain_ID, Trail_Name)
	Values ('$mountain', '$trail')";
}


?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		
	    <title>Add a Trail</title>

	    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/starter-template.css" rel="stylesheet">

	</head>

	<body>
		<?php include 'nav.php' ?>

		<div class="container">
			<div class="starter-template">


			<?php
			if($conn->query($sql) === TRUE) {
				echo "<h1>Success!</h1> <br>";
			}else {
				echo "Error: " . $sql . "<br>" . $conn->error;

			}

			$conn->close();

			?>

			<h3><u>Trail:</u> <?php echo $trail ?><br></h3>

			<div class="button">
			<button><a href="index.php">Back to Index</a></button>
			</div>

			</div>

		</div> <!--container-->

	</body>
<html>
