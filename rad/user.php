<html>
<head>
<meta charset="utf-8">
<title>Creating Fixed Header and Footer with CSS</title>
<style type="text/css">
    /* Add some padding on document's body to prevent the content
    to go underneath the header and footer */
    body{        
        padding-top: 60px;
        padding-bottom: 40px;
    }
    .container{
        width: 80%;
        margin: 0 auto; /* Center the DIV horizontally */
    }
    .fixed-header, .fixed-footer{
        width: 500%;
        position: fixed;        
        background: #333;
        padding: 10px 0;
        color: white;
    }
    .fixed-header{
        top: 0;
    }
    .fixed-footer{
        bottom: 0;
    }    
    /* Some more styles to beutify this example */
    nav a{
        color: #fff;
        text-decoration: none;
        padding: 7px 25px;
        display: inline-block;
    }
    .container p{
        line-height: 200px; /* Create scrollbar to test positioning */
    }
</style>

</head>






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




<h2><i>Know Your Customer</i></h2>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<img src="https://www.knowyourcustomer.com/wp-content/uploads/2018/06/Identify-logo-homepage-01-300x200.png" alt="LOGO"">
<link rel="stylesheet" href="form.css" type="text/css">
<div class="body-content">
  <div class="module">

<form action="user.php" method="POST" id="" onSubmit="return validate();">
  
  <div class="container">
    
   <body>  






<div class="fixed-header">
        <div class="container">
            <nav>
                <a href="admin.php">Login</a>
              
            </nav>
        </div>
    </div>
    <div class="container">


     
    </div>  














     <h2>User Registration</h2>
  <div>
    <label for="username">User Name:</label>
    <input type="text" id="username" name="username" required></input>
  </div>
  <div>
    <label for="phone">phone:</label><br>
    <input type="number" maxlength="10" id="phone" name="phone" required></input>
  </div>
<br>
  <div>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required></input>
  </div>
  <div>
      <label><b>Gender:</b></label><br>
       <input type="radio" name="gender" value="male" required> Male<br>
  <input type="radio" name="gender" value="female" required> Female<br>
  <input type="radio" name="gender" value="other" required> Other 
  
      </div>
     <div class="input-group">
      <button type="submit" class="btn" name="submit">Register</button>
    </div>
</form>
  </div>
</div>
 <div class="fixed-footer">
        <div class="container">Copyright &copy; 2019 Webdunia</div>        
    </div>
</body>
</html>
<script type="text/javascript">
  $(document).ready(function() {

  // $('#first_form').submit(function(e) {
  //   e.preventDefault();
  //   var username = $('#first_name').val();
  //   var phone = $('#phone').val();
  //   var email = $('#email').val();
  //   var gender = $('#gender').val();

  //   $(".error").remove();

  //   if (username.length < 1) {
  //     $('#username').after('<span class="error">This field is required</span>');
  //   }
    
  //   if (email.length < 1) {
  //     $('#email').after('<span class="error">This field is required</span>');
  //   } else {
  //     var regEx = /^[A-Z0-9][A-Z0-9._%+-]{0,63}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/;
  //     var validEmail = regEx.test(email);
  //     if (!validEmail) {
  //       $('#email').after('<span class="error">Enter a valid email</span>');
  //     }
  //   }
    
  // });

  $("#first_form").validate({
    submitHandler: function(form) {
      // do other things for a valid form
      form.submit();
    }
  });


});

</script>