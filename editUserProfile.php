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

  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>

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

    <div data-role="main" class= "loginContent">
<form id="register" action='#' method="post"
    accept-charset='UTF-8'>
    
<fieldset >
    <div class="form-top">
          Edit Profile
        </div>
    <div class="form-bottom">
    <input type='hidden' name='submitted' id='submitted' value='1'/>

    <label for='name' >Your Full Name: </label> 
    <input type='text' name='name' id='name' maxlength="50" required/>

    <label for='email' >Email Address:</label>
    <input type='text' name='email' id='email' maxlength="50" required />

    <label for='username' >UserName:</label>
    <input type='text' name='username' id='username' maxlength="50" required />

    <button id="addGameBTN">Update</button><button id="cancelButton" data-role="back">Cancel</button>
  </div>
  </fieldset>
  </form>
    <div class="form-bottom">
    <a href="#" id="changePassword"><center>Change Password</center></a>
    <form id="passowordChangeForm" action="">
      <div id="passwordDiv" style="display: none;">
        <label for="prevPassword">Current Password</label>
        <input type="password" name="prevPassword" id="prevPassword" maxlength="50" required="true">

    <label for='password' >New Password:</label>
    <input type='password' name='password' id='password' maxlength="50" required />

    <label for='confirmPassword' >Confirm Password:</label>
    <input type='password' name='confirmPassword' id='confirmPassword' maxlength="50" required />

    <center><a href="" id="updatePassword"> Change Password </a> |
    <a href="" id="cancelPasswordUpdate" style="color: red;">Cancel</a></center>
  </div>
</form>
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

      <!--If GENERAL USER-->    
      <!-- <ul>
        <li><a href="favorites.php" id="post" data-icon="file">Favorites</a></li>
        <li><a href="main.php" id="arrow-up" data-icon="home">Home</a></li>
        <li><a href="profile.php" id="arrow-up" data-icon="smile-o">Profile</a></li>
      </ul> -->
      
    </div>
    </div>


  <script type="text/javascript">
    $(document).ready(function(){
        $("#changePassword").click(function(){
            $("#changePassword").hide();
            $("#passwordDiv").show();
        });
        $("#cancelPasswordUpdate").click(function(){
            $("#passwordDiv").hide();
            $("#changePassword").show();
        });
    });
  </script>

</body>
</html>