<?php
$conn=mysqli_connect("localhost","root","","kyc_project");
//$echo = ""; 
 if(isset($_POST['submit']))
 {
  
  


   //echo '<pre>';
   //print_r($_FILES);
  // echo '</pre>';
  // die('sdf');
   
   $username=$_POST['username'];
   //echo '<pre>';
   //print_r($_FILES);
   //echo"$username"
   //die(dsg);

   $phone=$_POST['phone'];
   $email=$_POST['email'];
   
  // $image=$_POST['image'];
   $gender=$_POST['gender'];
   
   $query="INSERT INTO client(username, phone, email, gender) VALUES ('$username', '$phone', '$email', '$gender')";
    
// execute query
    $run=mysqli_query($conn,$query);
   
   
   if($run)
   {
     echo "Data Inserted Sucessfully";
   }
  else
  {
   echo "Error".mysqli_error($conn);
  }
   
 } 
 ?>