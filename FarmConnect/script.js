

function validation(){

	var firstName = document.registration.firstName;
	var lastName = document.registration.lastName;
	var email = document.registration.email;
	var password = document.registration.password;
	var cocnfirmPassword = document.registration.confirmPassword;
	var workRegion =  document.registration.workRegion;
	var phoneNumber = document.registration.phoneNumber;


	if(nameValidation(firstName)){

		if(nameValidation(lastName)){

			if(phoneNumberValidation(phoneNumber)){

				if(emailValidation(email)){

					if(passwordValidation(password, confirmPassword)){

						if(regionValidation(workRegion)){						

						}

					}
			
				}
			}

		}

	}

	return false;
	

	}




function nameValidation(firstName){
		var letters = /^[A-Za-z]+$/;
		var firstNameLen = firstName.value.length;
		if (firstName.value.match(letters)) {
			return true;
		}
		else{
			document.getElementById("invalidFirstName").innerHTML="Input letters only, try again!";
// alert('Username must have alphabet characters only and must be filled');
firstName.focus();
return false;
	}
}


function emailValidation(email){
	var mailFormamt = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if (email.value.match(mailFormat)) {
		return true;
	}
	return false;	
	document.getElementById("invalidEmail").innerHTML = "This is an invalid email";
	lastName.focus();

}

function passwordValidation(password, confirmPassword){

	if(password.value == confirmPassword.value){
		return true;
		
	}
	
	document.getElementById("invalidPassword").innerHTML = "Password do npt match!";

	return false;
	confirmPassword.focus();


	}

function regionValidation(workRegion){

	if (workRegion.value == "default") {
		return false;
		document.getElementById("invalidRegion").innerHTML = "Select region";
		workRegion.focus();
	}

	return true;

}

function phoneNumberValidation(phoneNumber){

	var digits = /^[0-9]+$/;
	if (phoneNumber.value.match(digits)) {
		return true;
	}

	else{
		document.getElementById("invalidPhoneNumber").innerHTML="The input should be with letters only, try again!";
		return false;
		phoneNumber.focus();
	}

}
