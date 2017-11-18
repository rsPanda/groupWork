<?php
	require 'dbconx.php';
	echo "this is the fav page";
	if(isset($_GET['game'])&& isset($_GET['user'])){
		echo "this is to remove a favourite";
		favouriteGame();
	}
	else{
		echo "this is to add a favourite";
		unfavouriteGame();
	}

	function unfavouriteGame(){
		$con=db();

		$game = $_GET['game'];
		$user = $_GET['user'];
		$sql_search = "DELETE FROM userfav WHERE userID = ".$user." AND gameID =".$game;
		echo $sql_search;
		mysqli_query($con, $sql_search);
		$con->close();
	}
	function favouriteGame(){
		$con=db();
		$game = $_GET['game'];
		$user = $_GET['user'];
		$sql_search = "INSERT INTO userfav(userID, gameID) VALUES (".$user.",".$game.")";
		echo $sql_search;
		mysqli_query($con, $sql_search);
		$con->close();

	}

?>