<?php
include '../database/databaseconnect.php';

	$firstName =filter_input(INPUT_POST, "firstName");
		$lastName = filter_input(INPUT_POST, "lastName");
		$phoneNumber =filter_input(INPUT_POST, "phoneNumber");
		$email =filter_input(INPUT_POST, "email");
		$workRegion = filter_input(INPUT_POST, "workRegion");
		$password =filter_input(INPUT_POST, "password");
		

		$userPassword = md5($password);

		$query = "INSERT INTO users (user_id, first_name, last_name, email, password, work_region, phone_number) VALUES (NULL, '$firstName', '$lastName', '$email', '$userPassword', '$workRegion', '$phoneNumber')";

		if (!$conn->query($query)===TRUE) {
			echo "Error: ".$query. "<br>".$conn->error;
		}		

		$conn->close();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Register to Farm connect</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<script type="text/javascript" src="../script.js"></script>
</head>
<body>


	<div class="registernav navigation">
			<ul>
				<li class="logo"><img src="../images/farmconnectlogo.png" ></li>				
			</ul>
		</div>
	<div class="registration">
		<h2>Register to FarmConnect</h2>
		<form  onsubmit="return validation()" action="register.php" name="registration"  method="POST" class="inputvalue">

		<div class="invalid"> <label>First name  <p id="invalidFirstName"></p></label></div>
		<input name="firstName" type="text" name="firstName" id="firstName">

		<div class="invalid"> <label>Last name <p id="invalidLastName"></p></label> </div>
		<input name="lastName" type="text" name="lastName" id="lastName" placeholder="Last name">

		<div class="invalid"> <label>Phone number <p id="invalidPhoneNumber"></p></label> </div>
		<input name="phoneNumber" type="text" name="phoneNumber" id="phoneNumber">

		<div class="invalid"> <label>Email <p id="invalidEmail"></p></label> </div>
		<input name="email" type="text" name="email" id="email">

		<div class="invalid"> <label>Password <p id="invalidPassword"></p></label> </div>
		<input name="Password" type="Password" name="Password" id="Password">

		<div class="invalid"> <label>Confirm Password <p id="invalidPassword"></p></label> </div>
		<input name="" type="Password" name="confirmPassword" id="Password">

		<div class="invalid"> <label>Region of work <p id="invalidRegion"></p></label> </div>
		<!-- <input name="workRegion" type="text" name="lastName" id="lastName"> -->


		<select>
			<option>Select work Region</option>
			<option>Simiyu</option>
			<option>Mtwara</option>
			<option>Katavi</option>
			<option>Mbeya</option>
			<option>Iringa</option>
			<option>Pwani</option>
			<option>Moroogoro</option>
		</select>






		<input type="submit" name="submit"  value="Register"  >

		<p>Registering extends your access in our website </p>
		<p>already have an account?  <a href="#">Sign in</a></p>

	</form>
	</div>

</body>
</html>