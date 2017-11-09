<?php

session_start();


if ($_SESSION["loggedIn"] >=2){
	echo "SuperAdmin";
}else if ($_SESSION["loggedIn"] ==1) {
	echo "Normal admin page";
}else{
	header('Location:homepage.php?search=call');
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Home Page</title>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
<script src="redirect.js"></script>
</head>
<body>

<?php 
  	require 'dbconx.php';
 

 $con = db();


$currentUser=$_SESSION["userID"];

$sql_search = "SELECT firstName AS 'First Name' FROM users WHERE userID = ".$currentUser;

$result = $con->query($sql_search); 

	if ($result-> num_rows > 0) {
		echo "<p>";
		while($row = $result->fetch_assoc()) {
			echo "Hello ".$row["First Name"];
		}
		echo "<p>";
	}else{
		echo "No results have been found matching your search";
	};



?>
<a href="user.php">Logout</a></p>


<button id="addGameBTN">Add Game</button>
<button id="editGameBTN">Edit Game</button>
<button id="deleteGameBTN">Delete Game</button>

<button id="addPostBTN">Add Post</button>
<button id="editPostBTN">Edit Post</button>
<button id="deletePostBTN">Delete Post</button>







</body>
</html>