 <?php
  if(isset($_POST['submit'])){
     $con=mysqli_connect("localhost", "root", "", "kyc_project");
    if (mysqli_connect_errno($con))
    {
        echo "MySql Error: " . mysqli_connect_error();
    }

    $query=mysqli_query($con,"SELECT * FROM admin WHERE username='$_POST[username]' && password='$_POST[password]'");
    
    $count=mysqli_num_rows($query);
    $row=mysqli_fetch_array($query);

    if ($count==1)
    {
        session_start();
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        header("location: panel.php");
    }else
    {
        echo "Invalid username or password";
    }   

    mysqli_close($con);
  }
   
    ?>


     <h2>Admin Login</h2>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<link rel="stylesheet" href="form.css">
<html>
<head>
<link href="./view/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div>
        <form action="" method="POST" >
            <div class="demo-table">
                <div class="body-content">
                <div class="module">
                    <h1>Admin form</h1>
                <div class="field-column">
                    <div>
                        <label for="username">Username</label>
                        <span id="username" class="error-info"></span>
                    </div>
                    <div>
                        <input name="username" id="username" type="text" class="demo-input-box" required>
                    </div>
                </div>
                <div class="field-column">
                    <div>
                        <label for="password">Password</label><span id="password" class="error-info"></span>
                    </div>
                    <div>
                        <input name="password" id="password" type="password" class="demo-input-box" required>
                    </div>
                </div>
                <div class="field-group">
                <div><input type="checkbox" name="remember" id="remember"
                    <label for="remember-me">Remember me</label>
                </div>
                <div class=field-column>
                    <div>
                        <input type="submit" value="Login" name="submit" class="btn btn-block btn-primary" />
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
