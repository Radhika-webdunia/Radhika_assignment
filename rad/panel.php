<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Panel</title>
</head>
<style>
.menu {
  width: 200px;
}
<?php 
session_start();
if(!isset($_SESSION['username'])) {
        header("location: admin.php");
    }
 
?>
</style>
<body>
 

  <div class="col-lg-12">
        <h1 style="text-align: center;">Hello, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>! </h1>
      </div>
<div class="menu">
    <img src="https://www.knowyourcustomer.com/wp-content/uploads/2018/06/Identify-logo-homepage-01-300x200.png" alt="LOGO"">
      <h3><a href="customer.php" style="text-decoration: none;color:white">Customer</a></h3></br>
      <h3><a href="client.php" style="text-decoration: none;color:white">Client</a></h3>
  
    <link rel="stylesheet" href="form.css" type="text/css">
    <div class="vr">&nbsp;</div>
</div>
<div class="middle">
        <table class="middle">
                <tr>
                  <td colspan=2 >
                    <br/>
                  </td>
                </tr>
                <tr>
                  
                  <td>
                    Total Customer
                  </td>
                </tr>
              </table>
  </div> 
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="logout.php" style="color: white; font-size: 40px;">Logout</a>
              </li>   
          </ul>
        </div> 
 
</body>
</html>