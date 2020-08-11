<?php
session_start();
include("../database/databaseconnect.php");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Welcome to the market</title>
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
				<li><a href="about.html">ABOUT-US</a></li>
				<li><a href="contacts.php">CONTACTS</a></li>
				<li><a href="login.php">LOGIN</a></li>
				<li><a href="register.php">REGISTER</a></li>
				
			</ul>
			
		</div>
	




	<div>
			
			<?php

			$query = "SELECT * FROM user_products";

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
			<label>Quantity available  <?php echo $row['quantity_available'];?></label>
			<label>Price / Kilo  <?php echo $row['price_per_kilo'];?></label>			
			<label>Region   <?php echo $row['region_available'];?></label>
			<form action="reserve.php" method="POST">
			<input type="submit" name="reserve" value="Reserve">

			<input hidden="hidden" type="text" name="uploadedBy" value=<?php echo $row['user_id'];?>>
			<input hidden="hidden"  type="text" name="productToReserve" value=<?php echo $row['product_name'];?>>

			</form>

			</div>

		
		</div>
			


			<?php


				}
				}
			}



			?>

		</div>



		<div class="footer">
       	
        	<hr style="border: 1px solid black">
           <p style="text-align: center"> Copyright &copy; <script>document.write(new Date().getFullYear())</script> FARMCONNECT All Rights Reserved</p>
       </div>
</body>
</html>