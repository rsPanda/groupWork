<?php 
require 'dbconx.php';
session_start();
$userType="none";
$canEdit="no";
if (isset($_SESSION["loggedIn"])){
  if ($_SESSION["loggedIn"] >=3){
    $userType="SuperAdmin";
    $userID=$_SESSION["userID"];
    $canEdit='yes';
  }else if ($_SESSION["loggedIn"] ==2) {
    $userType= "Admin";
    $userID=$_SESSION["userID"];
    $canEdit='yes';
  }else if ($_SESSION["loggedIn"] ==1){
    $userType= "General";
    $userID=$_SESSION["userID"];
  }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Home Page</title>
  <!-- Include meta tag to ensure proper rendering and touch zooming -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--Include the CSS file-->
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
<script>
  $().ready(function(){
    $("#searchBTN").on("click", function(){
      $search=$("#search").val();
      window.location.href="homepage.php?search="+$search;
    });
  });
</script>

<div data-role="pages" id="container">
  <!--Header-->
  <div data-role="header" id="header">      
    GAME HUB
    <div class="ui-btn-right" data-role="controlgroup" data-type="horizontal">
      <?php
      if(isset($_SESSION['loggedIn'])){
      echo '<a href="#popupMenu" data-rel="popup" data-transition="slideup" class="ui-btn ui-icon-user ui-btn-icon-notext ui-btn-inline ui-corner-all">My Profile</a><div data-role="popup" id="popupMenu"><ul data-role="listview" data-inset="true"><li><a href="profile.php">My Profile</a></li><li><a href="user.php" data-ajax="false">Logout</a></li></ul>';
      }else{
        echo '<a href="login.php" data-transition="slideup" class="ui-btn ui-icon-user ui-btn-icon-notext ui-btn-inline ui-corner-all">My Profile</a>';
      }

      ?>
    </div>
  </div><!--end dropdown nav button div-->  
 

  <div data-role="main" class='ui-content' id="mainDiv">
    <div id="searchArea">
      <input type='text' id='search' placeholder='Search for a game/console/genre here'></input>
      <button id='searchBTN' value='Search'>Search</button>
    </div>
    <div id="content-header">
      <h3 id="page-title">Games List</h3>
      <?php
      if ($canEdit == 'yes'){
        echo '<a href="addGame.php" data-ajax="false" data-transition="slideup" ><button id="addGame"><i class="fa fa-plus" aria-hidden="true"></i> Add Game</button></a>';
      }
      ?>
    </div>
    <?php
    require 'display.php';
    ?>
  </div><!--end of content div-->

  <div data-role="footer" id="footer">
    <!-- Copyright <i class="fa fa-copyright" aria-hidden="true"></i>  Gamehub 2017 -->
    <div data-role="navbar"  data-position="fixed">
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
    </div><!--end of footer div-->
  </div>
</div>
</body>
</html>