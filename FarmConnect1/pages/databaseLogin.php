<?php
session_start();

include '../database/databaseconnect.php';

		if (isset($_POST['loginButton']) ) {



			$userEmail = $_POST['email'];
			$userPassword = $_POST['password'];


			if ( empty($userEmail) ||empty($userPassword)) {

			echo "Input both fields please";
				
			}


			else{				

				$password = $userPassword;

				$query = "SELECT * FROM users WHERE email = '".$userEmail."' and password = '".$password."' ";

				$result = $conn->query($query);

				if (!$result-> num_rows > 0) {


					echo "No matching field";
					//header("Location: login.php")
					
				}


				else{

					$row = $result->fetch_assoc();

					if ($row["user_role"] == "Farmer") {
						
						header("Location: myFarm.php");
					}

					else if ($row["user_role"] == "Customer"){
						header("Location: customer.php");
					}

					else{
						header("Location: profession.php");
					}

					$_SESSION["User"] = $userEmail;
					$_SESSION['user_id'] = $row['user_id'];

				}

				
			}
			
				



			}
			
		

		$conn->close();


?>