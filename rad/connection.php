<?php
//print_r($_POST);
//die('===');
$name = (isset($_POST['username']) ? $_POST['name'] : '');
$phone = (isset($_POST['phone']) ? $_POST['phone'] : '');
$email = (isset($_POST['email']) ? $_POST['email'] : '');
$gender = (isset($_POST['gender']) ? $_POST['gender'] : '');
if (!empty($name) || !empty($phone) || !empty($email)|| !empty($gender)) {
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "kyc_project";
//create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
echo "connection created";
if (mysqli_connect_error()) {
die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
} else {
$INSERT = "INSERT Into client( `name`,`phone`,`email`,`gender`) values('$name','$phone','$email','$gender' )";
$stmt = $conn->prepare($INSERT);
//$stmt->bind_param("ssis", $name);
$stmt->execute();
$rnum = $stmt->num_rows;
echo "value inserted";
if ($rnum==0) {
$stmt->close();
}
}
$conn->close(); 
}
?>