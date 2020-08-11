<!DOCTYPE html>
<html>
<head>
	<title>Add product</title>

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

<div class="registration">
		<h2>Add product to your farm</h2>
		<form enctype="multipart/form-data"s class="inputvalue" action="displayProduct.php" method="POST">
			<label>Product name</label>
			<input  type="text" name="productName" id="lastName" placeholder="Product name">
			
		<label>Quantity</label>
			<input  type="text" name="quantity"  placeholder="Quantity available">
			<label>Price Per Kilo</label>
			<input  type="text" name="price"  placeholder="Price per kilo">
			
			<label>Region Available</label>
			<select name="region">
			<option>Region available</option>
			<option>Simiyu</option>
			<option>Mtwara</option>
			<option>Katavi</option>
			<option>Mbeya</option>
			<option>Iringa</option>
			<option>Pwani</option>
			<option>Morogoro</option>
		</select>
			<label>product image</label>
			<input type="file" name="productImage" id="productImage">			
			<input type="submit" value="Add Product" name="submit">
		</form>
		
	</div>



</body>
</html>