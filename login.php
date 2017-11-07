<?php

function login(){

	/***

	The two variables, $email and $password, collect the user entered log in information on the previous page. 

	The  "email" and "password" should be changed to fill what is used on the previous page
	***/

	$email = mysqli_real_escape_string($con, $_POST["email"]);
	$password = mysqli_real_escape_string($con, $_POST["password"]);



	$login = "SELECT email AS 'Email', password AS 'Password', admin AS 'Admin' FROM users WHERE email ='".$email."' AND password = '".$password."'";


	$result = $con->query($login);
	$admin_check = $result->fetch_assoc();



	/***

	The following IF statement decides if the log in information is the information for a valid user and the type of user that they are.

	The first IF statement will run when the log in is a valid log in, and within is a nested statement to send the user either to the general users page or to the admin page.

	If the log in is not a valid user a message will be displayed to the user that the log in information is incorrect.

	***/

	if ($result->num_rows > 0){

		echo "<br>valid log in";
		if($admin_check['Admin'] == 1){
			echo "<br>This is an admin";
		}else{
			echo "<br>This is a general user";
		}
		
	} 
	else{
		echo "<br>invalid login";
	}
}

function logout(){



}


?>

