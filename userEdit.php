<?php

require 'dbconx.php';
session_start();

$con = db();


if(isset ($_SESSION["loggedIn"]) && ($_SESSION["loggedIn"]) >= 2 ){
  $canEdit='yes';
}else{
  $canEdit='no';
}

if ($_SESSION["loggedIn"] >=3){

  $userType="SuperAdmin";
  $userID=$_SESSION["userID"];
}else{
  header('Location:homepage.php');
}

$userInfo = "SELECT email AS 'Email', firstName AS 'First Name', lastName AS 'Last Name' FROM users WHERE userID ='".$userID."'";

$result = mysqli_query($con, $userInfo);
$userInfo = $result->fetch_assoc();

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
      <!--main body part goes here-->
      <div data-role="main" class="ui-content" id="mainDiv">

<?php

if (isset($_SESSION['loggedIn']) && ($userType=="SuperAdmin")){
	if (isset($con, $_GET["editUser"])){
		makeAdmin();
	}

	if (isset($con, $_GET["deleteUser"])){
		deleteUser();
	}
	if (isset($con, $_GET["deleteAdmin"])){
		removeAdmin();
	}
}else{
	echo "This is an admin only page";
}



function makeAdmin(){
	$con=db();
	$editUser = $_GET["editUser"];
	$makeAdmin = "UPDATE users SET admin=1 WHERE userID = ".$editUser;
	mysqli_query($con, $makeAdmin);
	header('Location: userList.php');
}

function removeAdmin(){
	$con=db();
	$removeUser = $_GET["deleteAdmin"];
	$removeAdmin = "UPDATE users SET admin=0 WHERE userID = ".$removeUser;
	mysqli_query($con, $removeAdmin);
	header('Location: userList.php');
	$con->close();
}
 

function deleteUser(){
	$con=db();
	$deleteUser = $_GET["deleteUser"];
	$removeUser = "DELETE FROM users WHERE userID = ".$deleteUser;

	mysqli_query($con, $removeUser);

	echo "<section class='container'>This user has been deleted</section>";
	
}
?>
  </div>

    <div data-role="footer" id="footer">
      <!-- Copyright <i class="fa fa-copyright" aria-hidden="true"></i>  Gamehub 2017 -->
      <div data-role="navbar"  data-position="fixed">
      <!--If ADMIN-->
      <?php
        echo '<ul>
        <li><a href="post.php" id="post" data-icon="file" data-ajax="false">Posts</a></li>
        <li><a href="homepage.php" id="post" data-icon="gamepad" data-ajax="false">Home</a></li><li><a href="userList.php" id="arrow-up" data-icon="user" data-ajax="false">Admins</a></li><li><a href="profile.php" id="arrow-up" data-icon="smile-o" data-ajax="false">Profile</a></li></ul>';
      ?>
    </div>
  </div>
</div>

</body>
</html>
