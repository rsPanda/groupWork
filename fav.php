<?php
	require 'dbconx.php';
	$con=db();
	if(isset($_GET['game'])&& isset($_GET['user'])){
		$game = $_GET['game'];
		$user = $_GET['user'];

		$isFav="SELECT * FROM userfav WHERE userID ='".$user."' AND gameID ='".$game."'";
		echo $isFav;
		$result = mysqli_query($con, $isFav);
		if ($result->num_rows > 0){
			echo "to unfavourite";
			unfavouriteGame();
		} else{
		echo "to favourite";
		favouriteGame();
		}
	}

	function favouriteGame(){
		$con=db();
		$game = $_GET['game'];
		$user = $_GET['user'];
		$sql_search = "INSERT INTO userfav(userID, gameID) VALUES (".$user.",".$game.")";
		mysqli_query($con, $sql_search);
		header('Location: homepage.php');
		$con->close();

	}
	function unfavouriteGame(){
		$con=db();
		$game = $_GET['game'];
		$user = $_GET['user'];
		$sql_search = "DELETE FROM userfav WHERE userID = ".$user." AND gameID =".$game;
		echo $sql_search;
		mysqli_query($con, $sql_search);
		header('Location: homepage.php');
		$con->close();
	}



?>