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
    <!-- <script src="script.js"></script> -->
<?php      

    require 'dbconx.php';   
    $con=db();
  
?>

</head>


<body>
	
<div data-role="page" id="home">

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
      <div data-role="main" class="ui-content" id="mainDiv">
      <!--Top Header Menu-->
      <div>
          <span><input type="search" name="search-2" id="search-2" value="" /></span>
      </div>
      <section class="container">          
          <div class="profileContent">
             <p>
              <b>Name :</b>Claire King</br>
             <b>Email :</b> clairecollking@gmail.com<br>
             <b>Admin Level : </b>1<br>
             </p>
            <!-- <p class="read-more"><a href="#" class="button">Read More</a></p> -->
          </div>

           <button id="okayButton"><i class="fa fa-pencil-square-o"> &nbsp; Make Admin</i></button><button id="cancelButton" data-role="back"><i class="fa fa-trash"> &nbsp;Delete</i></button>
          </section>
	
	<?php

	$sql_search = "SELECT userID AS 'User ID', firstName AS 'First Name', lastName AS 'Last Name', email AS 'email', admin AS 'Admin Level' FROM users";

	$result = $con->query($sql_search); 

	if ($result-> num_rows > 0) {
		echo "<section class='container'><div class='profileContent'>";
		while($row = $result->fetch_assoc()) {
			echo "<b>Name:</b>".$row['First Name']." ".$row['Last Name']."<br><b>Email: </b>".$row['email']."<br><b>Admin Level:</b>" .$row['Admin Level']."</td><td><a href = userEdit.php?editUser=".$row['User ID']." data-ajax='false'>Make Admin</a><br><a href = userEdit.php?deleteAdmin=".$row['User ID']." data-ajax='false'>Remove Admin</a><br><a href = userEdit.php?deleteUser=".$row['User ID']." data-ajax='false'>Delete</a></td></tr>";
		}
		echo "</div></section>";
	}else{
		echo "No results have been found matching your search";
	};

	?>
    </div>


    <!--Add the footer-->
    <div data-role="footer" id="footer">
			<!-- Copyright <i class="fa fa-copyright" aria-hidden="true"></i>  Gamehub 2017 -->
			<div data-role="navbar"  data-position="fixed">
			<!--If ADMIN-->
			<ul>
				<li><a href="addPost.php" id="post" data-icon="file">Posts</a></li>
				<li><a href="gameList.php" id="post" data-icon="gamepad">Games</a></li>
				        <li><a href="main.php" id="post" data-icon="home">Home</a></li>

				<li><a href="userList.php" id="arrow-up" data-icon="user">Admins</a></li>
				<li><a href="profile.php" id="arrow-up" data-icon="smile-o">Profile</a></li>
			</ul>

			
		</div>	

</div>






<style>

td{

	border-bottom: 1px solid black;
}
</style>

<?php
$con->close();
?>

</body>
</HTML>
