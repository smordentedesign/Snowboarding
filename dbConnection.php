<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Snowboarding";

//create new connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connecttion
if ($conn->connect_error) {
	die("Connection failed:" . $conn->connect_error);
}

?>