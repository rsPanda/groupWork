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
      <div data-role="main" class="ui-content" id="mainDiv">
      <!--Top Header Menu-->
      <div>
          <span><input type="search" name="search-2" id="search-2" value="" /></span>
      </div>
      

      <!--main body-->
      <div>
       <button id="btn"><i class="fa fa-user-plus">&nbsp; Add Game</i></button>

      <section class="container">
      
          <div class="titleName">
            <span>COD: Infinite warfare </span>
          </div>
           
          <div class="articleImage"> <!--game Art here-->
            <img src="https://s3.amazonaws.com/opshead/assets/article/2016/06/12/Call-of-Duty-Official-Cover-Art-5_feature.jpg" alt="">
          </div>
      
          <div class="profileContent">
             <p>
              <b>Game Description:</b> Call of Duty returns to its roots with Call of Duty: WWII-a breathtaking experience that redefines World War II for a new gaming generation. Land in Normandy on D-Day and battle across Europe through iconic locations in history's most monumental war. Experience classic Call of Duty combat, the bonds of camaraderie, and the unforgiving nature of war.</br>
             <b>Genre:</b> Shooter<br>
             <b>Console: </b>XBoxOne<br>
             </p>
            <!-- <p class="read-more"><a href="#" class="button">Read More</a></p> -->
          </div>

           <button id="addGameBTN"><i class="fa fa-pencil-square-o"> &nbsp; Update</i></button><button id="cancelButton" data-role="back"><i class="fa fa-trash"> &nbsp;Cancel</i></button>
          </section>

          <section class="container">
      
          <div class="titleName">
            <span>COD: Infinite warfare </span>
          </div>
           
          <div class="articleImage"> <!--game Art here-->
            <img src="https://s3.amazonaws.com/opshead/assets/article/2016/06/12/Call-of-Duty-Official-Cover-Art-5_feature.jpg" alt="">
          </div>
          
          <div class="profileContent">
             <p><b>Game Description:</b> Call of Duty returns to its roots with Call of Duty: WWII-a breathtaking experience that redefines World War II for a new gaming generation. Land in Normandy on D-Day and battle across Europe through iconic locations in history's most monumental war. Experience classic Call of Duty combat, the bonds of camaraderie, and the unforgiving nature of war.</br>
             <b>Genre:</b> Shooter<br>
             <b>Console: </b>XBoxOne<br>
             </p>
            <!-- <p class="read-more"><a href="#" class="button">Read More</a></p> -->
          </div>

          <button id="addGameBTN"><i class="fa fa-pencil-square-o"> &nbsp; Update</i></button><button id="cancelButton" data-role="back"><i class="fa fa-trash"> &nbsp;Cancel</i></button>
          </section>
</div>
</div>
    </div>

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
  </div>


  <script>
    var $el, $ps, $up, totalHeight;

$(".articleDescription .button").click(function() {
      
  totalHeight =0

  $el = $(this);
  $p  = $el.parent();
  $up = $p.parent();
  $ps = $up.find("p:not('.read-more')");
  
  // measure how tall inside should be by adding together heights of all inside paragraphs (except read-more paragraph)
  $ps.each(function() {
    totalHeight += $(this).outerHeight();
  });
        
  $up
    .css({
      // Set height to prevent instant jumpdown when max height is removed
      "height": $up.height(),
      "max-height": 9999
    })
    .animate({
      "height": totalHeight
    });
    // fade out read-more
  $p.fadeOut();
  
  // prevent jump-down
  return false;
    
});
  </script>

</body>
</html>