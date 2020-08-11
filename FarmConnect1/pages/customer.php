<?php
session_start();

include '../database/databaseconnect.php';
$user_id = $_SESSION['user_id'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Farmers panel</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
	<div class="logotop logo">
		<img src="../images/farmconnectlogo.png" >
	</div>

	<div class="navigation" >
			<ul>
				
				<li><a href="../index.php">HOME</a></li>
				<li><a href="makert.php">MAKERT</a></li>				
				<li> <a href="myReserve.php">My Farm</a></li>
				<li><a href="about.html">ABOUT FC</a></li>
				<li><a href="contacts.php">CONTACTS</a></li>
				<li><a href="logout.php">Logout</a></li>
				
<!-- 
				<li class="navbutton"><form method="POST" action="./pages/login.php"><input type="submit" name="login" value="Logout" ></form></li> -->
				
			</ul>
	</div>





	<form action="makert.php" method="POST">

		<div class="addProduct">
		<input type="submit" name="addProduct"  value="Reserve product from market">
		</div>

	</form>


	
		<div>
			<h2 style=" position: relative; top: 100px; font-family: sans-serif; padding-left: 10px;">Your reserved products</h2>

			<?php

			$query = "SELECT * FROM reserved_products WHERE user_id = '$user_id'";

			$result = $conn->query($query);

			if (!$result) {
				echo "It has not connected";
			}

			else{
				if ($result->num_rows>0) {


					while ($row = $result->fetch_assoc()) {			
			

			?>

			<div class="product">
		<img src= <?php echo $row['product_image'];?>>
		<div class="descriptions">
			<label>Product name  <?php echo $row['product_name'];?></label>
			<label>Price / Kilo  <?php echo $row['price_per_kilo'];?></label>
			<label>Quantity available  <?php echo $row['quantity_available'];?></label>
			
			

			</div>

		
		</div>


			<?php


				}
				}
			}



			?>

		</div>


</body>
</html>



