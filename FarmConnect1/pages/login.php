
<!DOCTYPE html>
<html>
<head>
	<title>Login to Farm connect</title>
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
				
				
			</ul>
			
		</div>


	<!-- <div class="registernav navigation">
			<ul>
				<li class="logo"><img src="../images/farmconnectlogo.png" ></li>				
			</ul>
		</div> -->
	<div class="registration">
		<h2>Login to FarmConnect</h2>

	<form action="databaseLogin.php" method="POST" class="inputvalue">			
		<label>Email   <span class="invalid"></span></label>
		<input type="text" name="email" id="email">	
		<label>Password <span class="invalid"></span></label>
		<input type="Password" name="password" id=password">	
		<input type="submit" name="loginButton"  value="Login">

		<p>Registering makes you with more actions </p>
		<p>dont have an account  <a href="register.php">Sign up</a></p>

	</form>
	</div>


	<div class="footer">
       	
        	<hr style="border: 1px solid black">
           <p style="text-align: center"> Copyright &copy; <script>document.write(new Date().getFullYear())</script> FARMCONNECT All Rights Reserved</p>
       </div>
</body>
</html>