  <link rel="stylesheet" href="form.css" type="text/css">
<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['password']);
/*prev($_SESSION);
die();*/
 //session_destroy();
header("Location:admin.php");
?>