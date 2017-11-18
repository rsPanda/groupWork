<?php
require 'dbconx.php';
$con = db();

session_start();


if ($_SESSION["loggedIn"] >=2){
  $userType="SuperAdmin";
  $userID=$_SESSION["userID"];
}else if ($_SESSION["loggedIn"] ==1) {
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
                  <li><a href="#">My Profile</a></li>
            <li><a href="#">Logout</a></li>
              </ul>
          </div>
        </div>
    </div>

    <div data-role="main">
      <!--main body part goes here-->
      <div class="block">
        <?php

        $sql_search = "SELECT userID AS 'User ID', firstName AS 'First Name', lastName AS 'Last Name', email AS 'email', admin AS 'Admin Level' FROM users";

        $result = $con->query($sql_search); 

        if ($result-> num_rows > 0) {
          echo "<table>";
          while($row = $result->fetch_assoc()) {
            echo "<tr><td>Name:".$row['First Name']." ".$row['Last Name']."<br>Email: ".$row['email']."<br>Admin Level:" .$row['Admin Level']."</td><td><a href = userEdit.php?editUser=".$row['User ID']." data-ajax='false'>Make Admin</a><br><a href = userEdit.php?deleteAdmin=".$row['User ID']." data-ajax='false'>Remove Admin</a><br><a href = userEdit.php?deleteUser=".$row['User ID']." data-ajax='false'>Delete</a></td></tr>";
          }
          echo "</table>";
        }else{
          echo "No results have been found matching your search";
        };
      ?>
    </div>
  </div>

    <div data-role="footer" id="footer">
      <!-- Copyright <i class="fa fa-copyright" aria-hidden="true"></i>  Gamehub 2017 -->
      <div data-role="navbar"  data-position="fixed">
      <!--If ADMIN-->
      <ul>
        <li><a href="postList.php" id="post" data-icon="file">Posts</a></li>
        <li><a href="gamesList.php" id="post" data-icon="gamepad">Games</a></li>
        <li><a href="userList.php" id="arrow-up" data-icon="user">Admins</a></li>
        <li><a href="profile.php" id="arrow-up" data-icon="smile-o">Profile</a></li>
      </ul>
      <!--If GENERAL USER-->    
      <!-- <ul>
        <li><a href="posts.html" id="post" data-icon="file">Favorites</a></li>
        <li><a href="admins.html" id="arrow-up" data-icon="home">Home</a></li>
        <li><a href="feedback.html" id="arrow-up" data-icon="smile-o">Profile</a></li>
      </ul> -->
    </div>
    </div>
  </div>

</body>
</html>