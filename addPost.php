<?php
require 'dbconx.php';
$con=db();
session_start();
if(isset ($_SESSION["loggedIn"]) && ($_SESSION["loggedIn"]) >= 2 ){
  $canEdit='yes';
}else{
  $canEdit='no';
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
  <script src="script.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.js"></script>
  <style>
    label.error { float: none; color: red; padding-left: .5em; padding-top: .5em; margin-left:.5em; margin-right:.5em; vertical-align: top; border-top: 1px solid #e1e1e1;}
  </style>

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
    <form id="add" class="postContent" method="POST" action="editContent.php" data-ajax="false">
      <fieldset>

        <div class="form-top">
          Add Post
        </div>  
        <div class="form-bottom">   
          <input type="hidden" id="editBy" name="editBy" value="addPost"/>
        

          <?php
            $game_search="SELECT gameName AS 'Name', gameID AS 'Game ID' FROM gamelist";

            $gamelist = $con->query($game_search);

            if ($gamelist-> num_rows > 0) {
              echo '<select name="game" id="game"> <option selected disabled>Select Game...</option>';
              while($row = $gamelist->fetch_assoc()) {
                echo '<option value="'.$row['Game ID'].'">'.$row['Name'].'</option>';
              }
                echo '</select>';
            }
          ?> 

          <label>Post Title</label>
          <input type="text" name="title" id="title" placeholder="Post Title Here">

          <label>Post Date</label>
          <?php $time = getdate();
            $time = $time['mday']."/".$time['mon']."/".$time['year'];
          ?>
          <input type="text" name="date" id="date" value = "<?php echo $time ?>">

          <label>Contents</label> 
          <textarea id="contents" name="contents" placeholder="Post Contents Here"></textarea>

          <label>Link</label>
          <input type="url" name="postLink" placeholder="Post Link Here">
          <?php
            $outlet="SELECT outletName AS 'Name', outletID AS 'Outlet ID' FROM newsoutlet";

            $outletlist = $con->query($outlet);

            if ($outletlist-> num_rows > 0) {
              echo '<select name="outlet" id="outlet"> <option selected disabled>Select Link source...</option>';
              while($row = $outletlist->fetch_assoc()) {
                echo '<option value="'.$row['Outlet ID'].'">'.$row['Name'].'</option>';
              }
              echo '</select>';
            }
          ?>
          <button id="okayButton" type="submit" form="add" value="submit">Add</button><button id="cancelButton" data-role="back">Cancel</button>
        </div>
      </fieldset>
    </form>
  </div>

  <div data-role="footer" id="footer">
    <!-- Copyright <i class="fa fa-copyright" aria-hidden="true"></i>  Gamehub 2017 -->
    <div data-role="navbar"  data-position="fixed">

    <?php
      echo '<ul><li><a href="post.php" id="post" data-icon="file" data-ajax="false">Posts</a></li><li><a href="homepage.php" id="post" data-icon="gamepad" data-ajax="false">Home</a></li>';
      if ($canEdit == 'yes'){
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