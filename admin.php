<?php

session_start();
if ($_SESSION["loggedIn"] >=2){
	echo "SuperAdmin";
}else{
	header('Location:homepage.php');
}
?>



<a href="user.php">Logout</a></p>