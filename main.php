<!DOCTYPE html>
<html>
<head>
	<title>Game Hub</title>
		  <!-- Include meta tag to ensure proper rendering and touch zooming -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
<?php
require 'dbconx.php';
?>
    <!--Include the CSS file-->
  <link rel="stylesheet" href="css/adminStyle.css" type="text/css">

  	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel='stylesheet'>

  <!-- Include jQuery Mobile stylesheets -->
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
  <!--Include the Bootstrap stylesheets-->	
  <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
  <!--Icon Pack-->
  	<link rel="stylesheet"  href="dist/jqm-icon-pack-fa.css" />


  <!-- Include the jQuery library -->
  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

  <!--Include the bootstrap JS library-->
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!-- Include the jQuery Mobile library -->
  <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

   <style>
     @media(max-width:1000px){
        body{background:#e9ebee;}
        div{display: block;}
        a{text-decoration: none;}
        .container{
          margin:0 8px 8px;
          padding:12px;
          padding-bottom: 5px;
          width:95%;
          background:#fff;
          border:1px solid #ddd;
          border-radius: 5px;
          position:relative;
          float:left;

        }
        .titleName{
          width:100%;
          font-size:20px;
          font-family: Roboto, 'Droid Sans', Helvetica, sans-serif;
          position: relative;
          float: left;
          letter-spacing: 0.8px;
          word-spacing: 2px;
          color: #333;
          font-weight:bold;
          word-wrap: break-word;
          text-transform: uppercase;
          margin-bottom: 10px;
        }
        .articleImage{
          width:100px;
          height:100px;
          float:left;
          position:relative;
          border-radius: 5px;
          border: 1px solid #ddd;
        }
        .articleImage img{
          width:100%;
          height:100%;
          position: relative;
          float: left;
          border-radius: 5px;
        }
        .articleDescription{
          width:80%;
          max-height:205px;
          position: relative;
          float: right;
          font-size: 19px;
          color: #444;
          font-weight: normal;
          letter-spacing: .9px;
          text-align: justify;
          overflow: hidden;
          
        }
        .articleButtons{
          width: 100%;
          position: relative;
          float: left;
          border-top:1px solid #eee;
          margin-top: 20px;
        }
        .articleButtons ul{
          margin-top: 5px;
          margin:0px;
          padding: 0px;
          float:left;
          width: 100%;
          margin: 0 5px;
        }
        .articleButtons ul li{
          position: relative;
          float: left;
          list-style-type: none;
          display: inline-block;
          width:33.3%;
          font-size: 22px;
          text-align: center;
          font-family: sans-serif;
        }
        .articleButtons ul li a{
          font-size: 20px;
          position: relative;
          float: left;
          color:#aaa;
          padding: 20px 0;
          text-align: center;
          width: 100%;
        }
        .articleButtons ul li.cross:hover i{
          color: crimson;
        }
        .articleButtons ul li.edit:hover i{
          color: forestgreen;
        }
        .articleButtons ul li.favorite:hover i{
          color:salmon;
        }
        .articleButtons ul li:hover{
          background-color:#eee;
        }
      }
  </style>

</head>
<body>
	<div data-role="pages" id="container">
		<!--Header-->
		<div data-role="header" id="header">	    
<!-- 			<a href="#" class="ui-btn ui-shadow ui-corner-all ui-icon-back ui-btn-icon-notext ui-btn-a ui-btn-inline">Back</a>
 -->			GAME HUB
			  <div class="ui-btn-right" data-role="controlgroup" data-type="horizontal">
			     <a href="#popupMenu" data-rel="popup" data-transition="slideup" class="ui-btn ui-icon-user ui-btn-icon-notext ui-btn-inline ui-corner-all">My Profile</a>
			     <div data-role="popup" id="popupMenu">
			        <ul data-role="listview" data-inset="true">
			            <li><a href="#">My Profile</a></li>
						<li><a href="#">Logout</a></li>
			        </ul>
				</div>
<!-- 			      <a href="#" data-role="button" data-icon="home" data-iconpos="notext">Home</a>
 -->			  </div>


		</div>
	
		<div data-role="main" class="ui-content">
			<!--Top Header Menu-->
			<div>
			    <span><input type="search" name="search-2" id="search-2" value="" /></span>
			</div>
			

			<!--main body-->
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
		         Call of Duty: Infinite Warfare is a first-person shooter video game developed by Infinity Ward and published by Activision. It is the thirteenth primary installment in the Call of Duty series and was released worldwide for Microsoft Windows, PlayStation 4, and Xbox One on November 4, 2016.
		        Call of Duty: Infinite Warfare is a first-person shooter video game developed by Infinity Ward and published by Activision. It is the thirteenth primary installment in the Call of Duty series and was released worldwide for Microsoft Windows, PlayStation 4, and Xbox One on November 4, 2016.
		        
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