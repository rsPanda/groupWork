<?php

require 'dbconx.php';
session_start();

$con = db();

?>




<?php

if (isset($_SESSION['loggedIn']) && ($_SESSION['loggedIn'] == 2)){
	if (isset($con, $_GET["editUser"])){
		echo "edit user";
		makeAdmin();
	}

	if (isset($con, $_GET["deleteUser"])){
		echo "delete user";
		deleteUser();
	}
	if (isset($con, $_GET["deleteAdmin"])){
		echo "delete admin";
		removeAdmin();
	}
}else{
	echo "This is an admin only page";
}



function makeAdmin(){
	$con=db();
	$editUser = $_GET["editUser"];
	$makeAdmin = "UPDATE users SET admin=2 WHERE userID = ".$editUser;
	mysqli_query($con, $makeAdmin);
	$con->close();
}

function removeAdmin(){
	$con=db();
	$removeUser = $_GET["deleteAdmin"];
	$removeAdmin = "UPDATE users SET admin=1 WHERE userID = ".$removeUser;
	mysqli_query($con, $removeAdmin);
	$con->close();
}


function deleteUser(){
	$con=db();
	$deleteUser = $_GET["deleteUser"];
	$removeUser = "DELETE FROM users WHERE userID = ".$deleteUser;
	mysqli_query($con, $removeUser);
	$con->close();
}


?>