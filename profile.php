<?php
require 'dbconx.php';
$con = db();

session_start();

if ($_SESSION["loggedIn"] >=3){
  $userType="SuperAdmin";
  $userID=$_SESSION["userID"];
}else if ($_SESSION["loggedIn"] ==2) {
  $userType= "Admin";
  $userID=$_SESSION["userID"];
}else if ($_SESSION["loggedIn"] ==1){
  $userType= "General";
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


  <script src='redirect.js'></script>
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
          <li><a href="user.php" data-ajax='false'>Logout</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div data-role="main" class='ui-content' id="mainDiv">
    <div class="profileContent">
      <img src="assets/boy.png" class="img-circle">      
      <b>Name: </b> <?php echo $userInfo['First Name']." ".$userInfo['Last Name']?> <br>
      <b> Email : </b><?php echo $userInfo['Email'] ?></br>
      
      <!-- <button style="width: 60%; display: block; margin:0px auto; background-color: #2a9670; color: white;"><i class="fa fa-pencil-square-o">&nbsp;Edit</i></button> -->
      <button id="log" style="width: 60%; display: block; margin:0px auto; margin-top: 8px; background-color:   #c91b04; color: white;"><i class="fa fa-sign-out"> Logout</i></button>
    </div>
      <h3>Favourite List</h3>
      <?php require 'favList.php';?>
  </div>
  </div>

  <div data-role="footer" id="footer">
    <!-- Copyright <i class="fa fa-copyright" aria-hidden="true"></i>  Gamehub 2017 -->
    <div data-role="navbar"  data-position="fixed">
      <?php
      echo '<ul><li><a href="post.php" id="post" data-icon="file" data-ajax="false">Posts</a></li><li><a href="homepage.php" id="post" data-icon="gamepad" data-ajax="false">Home</a></li>';
      if($userType=="SuperAdmin"){
        echo '<li><a href="userList.php" id="arrow-up" data-icon="user" data-ajax="false">Admins</a></li>';
      }
      echo '<li><a href="profile.php" id="arrow-up" data-icon="smile-o" data-ajax="false">Profile</a></li></ul>';
      ?>
    </div>
  </div>
</body>
</html>