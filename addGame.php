<?php
  require "dbconx.php";
  $con = db();
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


</head>
<body>
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

 	<div data-role="main" class="loginContent">
    <form id="add" method="POST" action="editContent.php" data-ajax="false">

    <fieldset>
         <div class="form-top">
          Add Game
        </div>  
        <div class="form-bottom">  
        
       <input type="hidden" id="editBy" name="editBy" value="addGame"/>

        <label for='gameName'>Name of Game:</label>
        <input type='text' name='gameName' id='gameName' maxlength="50" required />

    <!-- <label for="newImg"></label>
        <input type="file" name="fileToUpload" id="fileToUpload"> -->
        
        <label for='gameDesc'>Game Description: </label>  
        <textarea name='gameDesc' id='gameDesc' maxlength="600" required></textarea> 

        <label for='newRelease'>Release Date: </label>  
        <input type='text' name='newRelease' id='newRelease' maxlength="50" required/>

    <br>

      <?php 

      $genreSelect="SELECT genreName AS 'Genre', genreID AS 'Genre ID' FROM gamegenre";

      $result = $con->query($genreSelect);
      echo "<div id='genreSelect'>";
      if ($result-> num_rows > 0) {
        
        echo "<select name='newGenre' id='newGenre' required><option selected disabled>Select genre...</option>";
        while($row = $result->fetch_assoc()) {
        echo "<option name='newGenre' value='".$row['Genre ID']."'>".$row['Genre']."</option> ";

        }
        echo "</select><br>";
      }else{
        echo "there is nothing here";
      }

      
      $consoleSelect="SELECT consoleName AS 'Console', consoleID AS 'Console ID' FROM console";
      $result = $con->query($consoleSelect);

      echo "<div id='consoleSelect'>";
      if ($result-> num_rows > 0) {
        
        echo "<select name ='newConsole' id='newConsole' required><option selected disabled>Select console...</option>";
        while($row = $result->fetch_assoc()) {
          echo "<option value='".$row['Console ID']."'>".$row['Console']."</option> ";
        }
        echo "</select><br>";
      }else{
        echo "there is nothing here";
      }

      $con->close();
    ?>
    <button id="addGameBTN" type="submit" form="add" value="submit">Add</button><button id="cancelButton" data-role="back">Cancel</button>

    </fieldset>
</form>
</div>

<div data-role="footer" id="footer">
            <!-- Copyright <i class="fa fa-copyright" aria-hidden="true"></i>  Gamehub 2017 -->
            <div data-role="navbar"  data-position="fixed">
            <!--If ADMIN-->
            <ul>
                <li><a href="addPost.php" id="post" data-icon="file">Posts</a></li>
                <li><a href="posts.html" id="post" data-icon="gamepad">Games</a></li>
                <li><a href="admins.html" id="arrow-up" data-icon="user">Admins</a></li>
                <li><a href="feedback.html" id="arrow-up" data-icon="smile-o">Profile</a></li>
            </ul>  
        </div>

</body>
</html>