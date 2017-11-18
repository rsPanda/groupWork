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
						<li><a href="login.php">Logout</a></li>
			        </ul>
		</div>
		</div>
	</div>
	
		<div data-role="main" class="ui-content" id="mainDiv">
			<!--Top Header Menu-->
			<div>
			    <span><input type="search" name="search-2" id="search-2" value="" /></span>
			</div>
			

			<!-- main body -->
			<div>


			<section class="container">
      
		      <div class="titleName">
		        <span>COD: Infinite warfare </span>
		      </div>
		       
		      <div class="articleImage">
		        <img src="https://s3.amazonaws.com/opshead/assets/article/2016/06/12/Call-of-Duty-Official-Cover-Art-5_feature.jpg" alt="">
		      </div>
		      
		      <div class="articleDescription">
		          Call of Duty: Infinite Warfare is a first-person shooter video game developed by Infinity Ward and published by Activision. It is the thirteenth primary installment in the Call of Duty series and was released worldwide for Microsoft Windows, PlayStation 4, and Xbox One on November 4, 2016.
		         Call of Duty: Infinite Warfare is a first-person shooter video game developed by Infinity Ward and published by Activision. It is the thirteenth primary installment in the Call of Duty series and was released worldwide for Microsoft Windows... See More
		        
		      </div>
			

		      <div class="articleButtons">
		        <ul>
		          <li class="favorite">
		            <a href="#"><i class="fa fa-heart-o"></i></a>
		          </li>
		          <li class="edit">
		            <a href="#"><i class="fa fa-pencil-square-o"></i></a>
		          </li>
		          <li class="cross">
		            <a href="#"><i class="fa fa-times"></i></a>
		          </li>
		        </ul>
		      </div>
		      </section>

		      <section class="container">
		      <div class="titleName">
		        <span>COD: Infinite warfare </span>
		      </div>
		       
		      <div class="articleImage">
		        <img src="https://s3.amazonaws.com/opshead/assets/article/2016/06/12/Call-of-Duty-Official-Cover-Art-5_feature.jpg" alt="">
		      </div>
		      
		      <div class="articleDescription">
		          Call of Duty: Infinite Warfare is a first-person shooter video game developed by Infinity Ward and published by Activision. It is the thirteenth primary installment in the Call of Duty series and was released worldwide for Microsoft Windows, PlayStation 4, and Xbox One on November 4, 2016.
		         Call of Duty: Infinite Warfare is a first-person shooter video game developed by Infinity Ward and published by Activision. It is the thirteenth primary installment in the Call of Duty series and was released worldwide for Microsoft Windows... See More
		        
		      </div>


		      <div class="articleButtons">
		        <ul>
		          <li class="favorite">
		            <a href="#"><i class="fa fa-heart-o"></i></a>
		          </li>
		          <li class="edit">
		            <a href="#"><i class="fa fa-pencil-square-o"></i></a>
		          </li>
		          <li class="cross">
		            <a href="#"><i class="fa fa-times"></i></a>
		          </li>
		        </ul>
		      </div>
    </section>
</div>
</div>
		

		<div data-role="footer" id="footer">
			<!-- Copyright <i class="fa fa-copyright" aria-hidden="true"></i>  Gamehub 2017 -->
			<div data-role="navbar"  data-position="fixed">
			<!--If ADMIN-->
			<ul>
				<li><a href="posts.html" id="post" data-icon="file">Posts</a></li>
				<li><a href="posts.html" id="post" data-icon="gamepad">Games</a></li>
				<li><a href="admins.html" id="arrow-up" data-icon="user">Admins</a></li>
				<li><a href="feedback.html" id="arrow-up" data-icon="smile-o">Profile</a></li>
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