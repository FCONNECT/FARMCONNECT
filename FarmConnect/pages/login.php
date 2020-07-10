<?php
session_start();

include '../database/databaseconnect.php';

		if (isset($_POST['loginButton'])) {
			$firstName =filter_input(INPUT_POST, "firstName");
		
		$email =filter_input(INPUT_POST, "email");		
		$password =filter_input(INPUT_POST, "password");
		$userPassword = md5($password);

		$query = "SELECT user_id FROM users WHERE email = '$email' AND password = '$userPassword'";

		$result = $conn->query($query);

		if ($result->num_rows > 0) {
			// while ($row = $result->fetch_assoc()) {

			// if ($row[""]== $email) {
			// 	# code...
			// }
			
			$_SESSION["email"]= $email;
			$_SESSION["loggedIn"] = 1;
			header("Location: ../index.php");
			exit();
			
			}

		else{
			echo "Check your inputs";
		}	
		}

		$conn->close();


?>
<!DOCTYPE html>
<html>
<head>
	<title>Login to Farm connect</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>


	<div class="registernav navigation">
			<ul>
				<li class="logo"><img src="../images/farmconnectlogo.png" ></li>				
			</ul>
		</div>
	<div class="registration">
		<h2>Login to FarmConnect</h2>
		<form action="login.php" method="POST" class="inputvalue">			
		<label>Email</label>
		<input type="text" name="email" id="email">	
		<label>Password</label>
		<input type="Password" name="Password" id="Password">	
		<input type="submit" name="loginButton"  value="Login">

		<p>Registering makes you with more actions </p>
		<p>dont have an account  <a href="#">Sign up</a></p>

	</form>
	</div>

</body>
</html>