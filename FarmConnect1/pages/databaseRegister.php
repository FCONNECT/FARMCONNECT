<?php
include '../database/databaseconnect.php';

$firstName=$lastName=$phoneNumber=$email=$workRegion=$userPassword=$userRole ='';


$firstName = $_POST["firstName"];
$lastName= $_POST["lastName"];
$phoneNumber=$_POST["phoneNumber"];
$email= $_POST["email"];
$workRegion= $_POST["workRegion"];
$userPassword= $_POST["password"];
$confirmPassword= $_POST["confirmPassword"];
$userRole = $_POST["userRole"];



		if (isset($_POST['submit'])) {


		if (empty($firstName)||empty($lastName)||empty($phoneNumber)||empty($email)||empty($workRegion)||empty($userPassword)||empty($confirmPassword)||empty($userRole)) {

			echo "Please input both fields";		
		} 


		else {

					


				if (checkUser($conn, $email) == false) {
						$query = "INSERT INTO users (user_id, first_name, last_name, email, password,user_role, work_region, phone_number) VALUES (NULL, '$firstName', '$lastName', '$email', '".$_POST["password"]."','$userRole', '$workRegion', '$phoneNumber')";

				if (!$conn->query($query)===TRUE) {
					echo "Error: ".$query. "<br>".$conn->error;
				}

				header("location: login.php");
				}

				else{
					echo "The user exit register with other email or login to your account";

				}

				    }

				
			}


		function checkUser($conn, $email){
			$userExit = false;

			$sql  = "SELECT email FROM users";
			$queryResult = $conn->query($sql);


			if ($queryResult->num_rows > 0) {

				
				    
				  while( $row = $queryResult->fetch_assoc()) {

				   	if( $row["email"]=== $email) {
				   	$userExit = true;
				   					   			   
				   }				   				  

				}

				return $userExit;				
		}
	}			

		$conn->close();
?>