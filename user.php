<?php

	require 'dbconx.php';
	session_start();

	$con = db();

	
	if (isset($_SESSION["loggedIn"])){
		logout();
	}else{
		$email = mysqli_real_escape_string($con, $_POST["username"]);
		$password = mysqli_real_escape_string($con, $_POST["password"]);
		login($email, $password);
	}



/***

The two variables, $email and $password, collect the user entered log in information on the previous page. 

The  "email" and "password" should be changed to fill what is used on the previous page
***/

function login($email, $password){

	$con = db();

	$login = "SELECT email AS 'Email', password AS 'Password', admin AS 'Admin', userID AS 'UserID' FROM users WHERE email ='".$email."' AND password = '".$password."'";


	$result = mysqli_query($con, $login);
	$admin_check = $result->fetch_assoc();



	/***

	The following IF statement decides if the log in information is the information for a valid user and the type of user that they are.

	The first IF statement will run when the log in is a valid log in, and within is a nested statement to send the user either to the general users page or to the admin page.

	If the log in is not a valid user a message will be displayed to the user that the log in information is incorrect.

	***/

	if ($result->num_rows > 0){

		echo "<br>valid log in";
		
		switch ($admin_check['Admin']){
		case '1':
			header( 'Location: admin.php');
			$_SESSION["loggedIn"]=3;
			$_SESSION["userID"]=$admin_check["UserID"];
			break;
		case '2':
			header( 'Location: admin.php');
			echo 'super admin';
			$_SESSION["loggedIn"]=2;
			$_SESSION["userID"]=$admin_check["UserID"];
			break;
		default:
			echo "generalMain.php";
			$_SESSION["loggedIn"]=1;
			$_SESSION["userID"]=$admin_check["UserID"];
			break;
		}

		
		
	} 
	else{
		echo "<br>invalid login";
	}
}


function logout(){

	session_unset();
	session_destroy();
	header("Location: homepage.php");

}


?>

