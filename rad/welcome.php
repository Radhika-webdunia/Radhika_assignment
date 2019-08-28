<?php
	//Start the Session
	session_start();

	//Include the Database Config File
	include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
  	<script type="text/javascript" src="js/welcome.js"></script>
  	<style>
  		#custtabledata, #clienttabledata{
  			display: none;
  		}
  	</style>
</head>
<body>
	<div class="container">
		<br><br>

		<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">

  			<a class="navbar-brand" href="#">
  				<img src="img/loho4.png" style="width: 90px;">
  			</a>

  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    			<span class="navbar-toggler-icon"></span>
  			</button>

  			<div class="collapse navbar-collapse" id="collapsibleNavbar">
    			<ul class="navbar-nav ml-auto">
      				<li class="nav-item">
        				<a class="nav-link" href="logout.php" style="color: white; font-size: 40px;">Logout</a>
      				</li>   
    			</ul>
  			</div> 

		</nav>
	
		<br><br><br>
	</div>

	<div class="container-fluid">

  		<ul class="nav flex-column">

    		<li class="nav-item">
      			<button id="custbutton" class="btn btn-danger" style="display: inline-block;">Customers</button>
    		</li>
    		<br>
    		<li class="nav-item">
      			<button id="clientbutton" class="btn btn-danger" style="display: inline-block;">Clients</button>
    		</li>

 		</ul>
 	</div>

 	<div class="container">

		<!-- Fetches the name of logged in admin -->
		<div class="row">
			<div class="col-lg-12">
				<h1 style="text-align: center;">Hello, <b><?php echo htmlspecialchars($_SESSION["name"]); ?></b>! </h1>
			</div>
		</div>
		<br>

	</div>

	<!-- Table to Display Customer Data -->
	<table id="custtabledata" class=" table table-striped table-hover table-bordered">
 
 		<tr class="bg-dark text-white text-center">
 
 			<th> Id </th>
 			<th> Name </th>
 			<th> Phone </th>
 			<th> Email </th>
 			<th> Gender </th>
 			<th> Activate Customer</th>
 			<th> Delete </th>

  		</tr >

  		<?php

  			//SQL Query for fetching the data
 			$q = "select id, name, phone, email, gender from userdetails WHERE status = 0";

  			$query = mysqli_query($con,$q);

  			while($res = mysqli_fetch_array($query)){
 		?>

 		<tr class="text-center">

 			<td> <?php echo $res['id'];  ?> </td>
 			<td> <?php echo $res['name'];  ?> </td>
 			<td> <?php echo $res['phone'];  ?> </td>
 			<td> <?php echo $res['email'];  ?> </td>
 			<td> <?php echo $res['gender'];  ?> </td>
 			<td> <button class="btn-danger btn"><a href="activaterecord.php?id=<?php echo $res['id']; ?>" class="text-white"> Activate </a></button></td>
 			<td> <button class="btn-danger btn"> <a href="deleterecord.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>

  		</tr>

  		<!-- Fetches the total number of customers in table -->
  		<?php 
 			}

 			$numberOfRows = mysqli_num_rows($query);
    		echo "<h4 style='text-align: center;'>Total Number Of Customers = ".$numberOfRows."</h4>";
    				
  		?>
 
 	</table>

 	<!-- Table to Display Client Data -->
 	<table id="clienttabledata" class="table table-striped table-hover table-bordered">
				
		<tr class="bg-dark text-white text-center">

			<th> Id </th>
			<th> Name </th>
			<th> Phone </th>
			<th> Email </th>
			<th> Gender </th>
			<th> Address </th>
			<th> Edit Client Details</th>
			<th> Delete Client Details </th>
			<th> Make Customer Again </th>

		</tr>

		<?php

			//SQL Query for fetching the data
			$q = "SELECT id, name, phone, email, gender, address FROM userdetails WHERE status = 1";

			$query = mysqli_query($con,$q);

			while($res = mysqli_fetch_array($query)) {

		?>

		<tr class="text-center">

			<td> <?php echo $res['id']; ?></td>
			<td> <?php echo $res['name']; ?></td>
			<td> <?php echo $res['phone']; ?></td>
			<td> <?php echo $res['email']; ?></td>
			<td> <?php echo $res['gender']; ?></td>
			<td> <?php echo $res['address']?></td>
			<td> <button class="btn-danger btn"> <a href="editclient.php?id=<?php echo $res['id']; ?>" class="text-white"> Edit </a>  </button> </td>
			<td> <button class="btn-danger btn"> <a href="deleteclient.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>
			<td> <button class="btn-danger btn"> <a href="inactiveclient.php?id=<?php echo $res['id']; ?>" class="text-white"> Inactive Client </a>  </button> </td>

		</tr>

		<!-- Fetches the total number of clients in table -->
		<?php
			}

			$numberOfRows = mysqli_num_rows($query);
    		echo "<h4 style='text-align: center;'>Total Number Of Clients = ".$numberOfRows."</h4>";
    				
		?>
				
	</table>  

</body>
</html>
