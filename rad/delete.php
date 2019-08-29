<?php
 session_start();
 if(!isset($_SESSION['username'])) {
        header("location: panel.php");
    }
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "kyc_project";
//create connection
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	$id=$_GET['id'];
	$q = "DELETE FROM client where id=$id";

	mysqli_query($conn, $q);
	header("location:client.php");


?>