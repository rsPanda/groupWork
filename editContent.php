<?php
require 'dbconx.php';

$con=db();

$editBy= ($_POST["editBy"]);

switch ($editBy){
	case "addGame":
		addGame();
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


function imgUpload(){

	$target_dir = "gameArt/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	echo $target_file;
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }
	}
	// Check if file already exists
	if (file_exists($target_file)) {
	    echo "Sorry, file already exists.";
	    $uploadOk = 0;
	}

	 // Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) {
	    echo "Sorry, your file is too large.";
	    $uploadOk = 0;
	}

	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}
}


function addGame(){
	$con=db();
	echo "fillGameForm function is starting";

	$newName = mysqli_real_escape_string($con, $_POST["gameName"]);
	$newImg = "placeholder.jpg";
	$newGenre = mysqli_real_escape_string($con, $_POST["newGenre"]);
	$newDesc = mysqli_real_escape_string($con, $_POST["gameDesc"]);
	$newConsole = mysqli_real_escape_string($con, $_POST["newConsole"]);
	$newRelease = mysqli_real_escape_string($con, $_POST["newRelease"]);
	
	$addGame= "INSERT INTO gamelist(gameName, gameImg, genreID, gameDesc, consoleID, releaseDate) VALUES ('".$newName."', '".$newImg."','".$newGenre."', '".$newDesc."', '".$newConsole."', '".$newRelease."')";
	echo $addGame;
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