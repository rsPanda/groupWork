<?php
require "dbconx.php";
$con = db();
session_start();

if ($_SESSION["loggedIn"] >=3){
	$userType="SuperAdmin";
	$userID=$_SESSION["userID"];
	$canEdit='yes';
}else if ($_SESSION["loggedIn"] ==2) {
	$userType= "Admin";
	$userID=$_SESSION["userID"];
	$canEdit='yes';
}else{
	header("Location:homepage.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Game Hub</title>
          <!-- Include meta tag to ensure proper rendering and touch zooming -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Include the CSS file-->
  <!-- <link rel="stylesheet" href="css/adminStyle.css" type="text/css"> -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel='stylesheet'>

  <!-- Include jQuery Mobile stylesheets -->
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
  <!--Icon Pack-->
    <link rel="stylesheet"  href="dist/jqm-icon-pack-fa.css" />
  <!-- Include the jQuery library -->
  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

  <!--Include the bootstrap JS library-->
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!-- Include the jQuery Mobile library -->
  <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
  <script src="redirect.js"></script>


</head>
<body>
	
    <div data-role="pages" id="container">
        <!--Header-->
    <div data-role="header" id="header">        
      GAME HUB
      <div class="ui-btn-right" data-role="controlgroup" data-type="horizontal">
        <a href="#popupMenu" data-rel="popup" data-transition="slideup" class="ui-btn ui-icon-user ui-btn-icon-notext ui-btn-inline ui-corner-all">My Profile</a>
          <div data-role="popup" id="popupMenu">
            <ul data-role="listview" data-inset="true">
                <li><a href="profile.php">My Profile</a></li>
                <li><a href="user.php">Logout</a></li>
              </ul>
          </div>
        </div>
    </div>
<div data-role="main" class="loginContent">

<div id="response">

<?php


if(isset($_POST["editBy"])){
	$editBy= ($_POST["editBy"]);
}else{
	$editBy=($_GET["editBy"]);
}

switch ($editBy){
	case "addGame":
		addGame();
		break;
	case "editGame":
		editGame();
		break;
	case "deleteGame":
		deleteGame();
		break; 	
	case "addPost":
		addArticle();
		break;
	case "editPost":
		editArticle();
		break;
	case "deletePost":
		deleteArticle();
		break;
	default:
		echo "This page does not exist";	
}


function imgUpload(){
   if(isset($_FILES['newImg'])){
      $errors= array();
      $file_name = $_FILES['newImg']['name'];
      $file_size = $_FILES['newImg']['size'];
      $file_tmp = $_FILES['newImg']['tmp_name'];
      $file_type = $_FILES['newImg']['type'];
      $file_ext = pathinfo($_FILES["newImg"]["name"])['extension'];
      

      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be exactely 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"assets/gameArt/".$file_name);
      }else{
         print_r($errors);
      }
   }
}

function addGame(){
	$con=db();

	$newName = mysqli_real_escape_string($con, $_POST["gameName"]);
	imgUpload();
	$newImg= $_FILES['newImg']['name'];
	//$newImg = mysqli_real_escape_string($con, $_POST["gameImg"]);
	$newGenre = mysqli_real_escape_string($con, $_POST["newGenre"]);
	$newDesc = mysqli_real_escape_string($con, $_POST["gameDesc"]);
	$newConsole = mysqli_real_escape_string($con, $_POST["newConsole"]);
	$newRelease = mysqli_real_escape_string($con, $_POST["newRelease"]);
	
	$addGame= "INSERT INTO gamelist(gameName, gameImg, genreID, gameDesc, consoleID, releaseDate) VALUES ('".$newName."', '".$newImg."','".$newGenre."', '".$newDesc."', '".$newConsole."', '".$newRelease."')";

	mysqli_query($con, $addGame);
	echo "New game has been added!";
	
}

function editGame(){
	$con=db();

	$forEdit= mysqli_real_escape_string($con, $_POST["forEdit"]);

	$newName = mysqli_real_escape_string($con, $_POST["newName"]);
	imgUpload();
	$newImg= $_FILES['newImg']['name'];
	$newGenre = mysqli_real_escape_string($con, $_POST["newGenre"]);
	$newDesc = mysqli_real_escape_string($con, $_POST["newDesc"]);
	$newRelease = mysqli_real_escape_string($con, $_POST["newRelease"]);
	$newConsole = mysqli_real_escape_string($con, $_POST["newConsole"]);

	$editGame = "UPDATE gamelist SET gameName='".$newName."', gameImg='".$newImg."', genreID='".$newGenre."', gameDesc='".$newDesc."', consoleID='".$newConsole."', releaseDate='".$newRelease."' WHERE gameID ='".$forEdit."'";

	mysqli_query($con, $editGame);
	echo "Game has been edited!";

}

function deleteGame(){
	$con=db();

	$forDelete = mysqli_real_escape_string($con, $_GET["forDelete"]);

	$deleteGame = "DELETE FROM gamelist WHERE gameID = '".$forDelete."'";

	mysqli_query($con, $deleteGame);
	echo "Game has been deleted!";

}


function addArticle(){
	$con=db();

	$forGame = mysqli_real_escape_string($con, $_POST["game"]);
	$newName = mysqli_real_escape_string($con, $_POST["title"]);
	$date = mysqli_real_escape_string($con, $_POST["date"]);
	$newDesc = mysqli_real_escape_string($con, $_POST["contents"]);
	$newOutletID = mysqli_real_escape_string($con, $_POST["outlet"]);
	$newLink = mysqli_real_escape_string($con, $_POST["postLink"]);



	
	$addArticle= "INSERT INTO gamenews(gameID, articleDate, articleName, articleDesc, outletID, articleLink) VALUES ('".$forGame."', '".$date."','".$newName."','".$newDesc."', '".$newOutletID."', '".$newLink."')";

	mysqli_query($con, $addArticle);

	echo "New post has been added!";
}

function editArticle(){
	$con=db();

	$forEdit= mysqli_real_escape_string($con, $_POST["forEdit"]);

	$forGame = mysqli_real_escape_string($con, $_POST["game"]);
	$newName = mysqli_real_escape_string($con, $_POST["title"]);
	$date = mysqli_real_escape_string($con, $_POST["date"]);
	$newDesc = mysqli_real_escape_string($con, $_POST["contents"]);
	$newOutletID = mysqli_real_escape_string($con, $_POST["outlet"]);
	$newLink = mysqli_real_escape_string($con, $_POST["postLink"]);

	$editArticle = "UPDATE gamenews SET gameID='".$forGame."', articleName='".$newName."', articleDate='".$date."', articleDesc='".$newDesc."', outletID='".$newOutletID."', articleLink='".$newLink."' WHERE articleID ='".$forEdit."'";

	mysqli_query($con, $editArticle);

	echo "Post has been edited!";

}


function deleteArticle(){
	$con=db();
	$forDelete = mysqli_real_escape_string($con, $_GET["forDelete"]);
	$deletePost = "DELETE FROM gamenews WHERE articleID = '".$forDelete."'";
	mysqli_query($con, $deletePost);
	echo "<section class='container'>Post has been deleted!</section>";
}

?>
</div>
</div>
<div data-role="footer" id="footer">
  <!-- Copyright <i class="fa fa-copyright" aria-hidden="true"></i>  Gamehub 2017 -->
  <div data-role="navbar"  data-position="fixed">
  <!--If ADMIN-->
    <?php
      echo '<ul><li><a href="post.php" id="post" data-icon="file" data-ajax="false">Posts</a></li><li><a href="homepage.php" id="post" data-icon="gamepad" data-ajax="false">Home</a></li>';
      if ($userType == 'SuperAdmin'){
        echo '<li><a href="userList.php" id="arrow-up" data-icon="user" data-ajax="false">Admins</a></li>';
      }
      if(isset($_SESSION['loggedIn'])){
        echo '<li><a href="profile.php" id="arrow-up" data-icon="smile-o" data-ajax="false">Profile</a></li>';
      }else{
        echo '<li><a href="login.php" id="arrow-up" data-icon="smile-o" data-ajax="false">Log In</a></li>';
      }
      echo '</ul>';
      ?> 
  </div>
</div>
</div>
</body>
</html>