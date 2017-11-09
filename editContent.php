<?php
require 'dbconx.php';
$con=db();

$editBy= ($_GET["editBy"]);


switch ($editBy){
	case "addGame":
		echo "add game";
		break;
	case "editGame":
		echo "edit game";
		break;
	case "deleteGame":
		echo "delete game";
		break; 	
	case "addPost":
		echo "add post";
		break;
	case "editPost":
		echo "edit post";
		break;
	case "deletePost":
		echo "delete post";
		break;
	default:
		echo "This page does not exist";	
}


function fillGameForm(){


	$genreSelect="SELECT genreName AS 'Genre' FROM gamegenre";


	$result = $con->query($genreSelect);

	echo "<div id='genreSelect'><ul>";
	if ($result-> num_rows > 0) {
		echo "there is something here";
		echo "<div id='genreSelect'><ol>";
		while($row = $result->fetch_assoc()) {
		echo "<li class='genre'>".$row['Genre']."'</li> ";

		}
		echo "</ul>";
	}else{
		echo "there is nothing here";
	}
	

}


function addGame(){
	echo "fillGameForm function is starting";

	$newName = mysqli_real_escape_string($con, $_POST["newName"]);
	$newImg = mysqli_real_escape_string($con, $_POST["newImg"]);
	$newGenre = mysqli_real_escape_string($con, $_POST["newGenre"]);
	$newDesc = mysqli_real_escape_string($con, $_POST["newDesc"]);
	$newConsole = mysqli_real_escape_string($con, $_POST["newConsole"]);
	$newRelease = mysqli_real_escape_string($con, $_POST["newRelease"]);
	
	$addGame= "INSERT INTO gamelist(gameName, gameImg, genreID, gameDesc, consoleID, releaseDate) VALUES ('".$newName."', '".$newImg."','".$newGenre."', '".$newDesc."', '".$newConsole."', '".$newRelease."')";
	mysqli_query($con, $addGame);
}

function editGame(){

	$forEdit= mysqli_real_escape_string($con, $_POST["forEdit"]);

	$newName = mysqli_real_escape_string($con, $_POST["newName"]);
	$newImg = mysqli_real_escape_string($con, $_POST["newImg"]);
	$newGenre = mysqli_real_escape_string($con, $_POST["newGenre"]);
	$newDesc = mysqli_real_escape_string($con, $_POST["newDesc"]);
	$newConsole = mysqli_real_escape_string($con, $_POST["newConsole"]);

	$editGame = "UPDATE gamelist SET gameName='".$newName."', gameImg='".$newImg."', genreID='".$newGenre."', gameDesc='".$newDesc."', consoleID='".$newConsole."', releaseDate='".$newRelease."' WHERE gameID ='".$forEdit."'";

	mysqli_query($con, $editGame);

}

function deleteGame(){

	$forDelete = mysqli_real_escape_string($con, $_POST["forDelete"]);



	$deleteGame = "DELETE FROM gamelist WHERE gameID = '".$forDelete."'";

	mysqli_query($con, $deleteGame);

}


function addArticle(){

	$newName = mysqli_real_escape_string($con, $_POST["newName"]);
	$newDate = mysqli_real_escape_string($con, $_POST["newDate"]);
	$newDesc = mysqli_real_escape_string($con, $_POST["newDesc"]);
	$newOutletID = mysqli_real_escape_string($con, $_POST["newOutletID"]);
	$newLink = mysqli_real_escape_string($con, $_POST["newLink"]);
	
	$addArticle= "INSERT INTO gamenews(articleName, articleDate, articleDesc, outletID, articleLink) VALUES ('".$newName."', '".$newDate."','".$newDesc."', '".$newOutletID."', '".$newLink."')";
	mysqli_query($con, $addArticle);
}

function editArticle(){
	$forEdit= mysqli_real_escape_string($con, $_POST["forEdit"]);

	$newName = mysqli_real_escape_string($con, $_POST["newName"]);
	$newDate = mysqli_real_escape_string($con, $_POST["newDate"]);
	$newDesc = mysqli_real_escape_string($con, $_POST["newDesc"]);
	$newOutletID = mysqli_real_escape_string($con, $_POST["newOutletID"]);
	$newLink = mysqli_real_escape_string($con, $_POST["newLink"]);

	$editArticle = "UPDATE gamenews SET articleName='".$newName."', articleDate='".$newDate."', articleDesc='".$newDesc."', outletID='".$newOutletID."', articleLink='".$newLink."' WHERE gameID ='".$forEdit."'";

	mysqli_query($con, $editArticle);

}

function deleteArticle(){

	$forDelete = mysqli_real_escape_string($con, $_POST["forDelete"]);



	$deletePost = "DELETE FROM gamenews WHERE articleID = '".$forDelete."'";

	mysqli_query($con, $deletePost);

}

?>