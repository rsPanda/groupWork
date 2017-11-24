<?php

require 'dbconx.php';
$con=db();

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
<?php
$toEdit=$_GET['game'];

$gameToEdit="SELECT gamelist.gameName AS 'Name', gamelist.gameImg AS 'Game Art', gamelist.gameID AS 'Game ID', gamelist.gameDesc AS 'Description', gamelist.releaseDate AS 'Release', gamelist.genreID AS 'Genre ID', gamegenre.genreName AS 'Genre', console.consoleName AS 'Console' FROM gamelist LEFT JOIN gamegenre ON gamelist.genreID=gamegenre.genreID LEFT JOIN console ON gamelist.consoleID=console.consoleID WHERE gamelist.gameID LIKE ".$toEdit;

$result = $con->query($gameToEdit); 

$editDetails=mysqli_fetch_assoc($result);

?>
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
    <form id="edit" class="gameContent" method="POST" action="editContent.php" data-ajax="false" enctype="multipart/form-data">

      <fieldset>
        <div class="form-top">
          Edit Game
        </div>  

        <div class="form-bottom">            
          <input type="hidden" id="editBy" name="editBy" value="editGame"/>
          <input type="hidden" id="forEdit" name="forEdit" value="<?php echo $editDetails['Game ID']?>"/>


          <label for='gameName'>Name of Game:</label>
          <input type='text' name='newName' id='newName' maxlength="50" value="<?php echo $editDetails['Name']?>" required />
          
          <label for="newImg"></label>
          <input type="file" name="newImg" id="newImg" value ="<?php echo $editDetails['Game Art']?>">
           
          <label for='gameDesc'>Game Description: </label>  
          <textarea name='newDesc' id='newDesc' maxlength="600" required><?php echo $editDetails['Description']?></textarea> 

          <label for='newRelease'>Release Date: </label>  
          <input type='text' name='newRelease' id='newRelease' maxlength="50" value="<?php echo $editDetails['Release']?>" required/>

          <br>

          <?php 

          $genreSelect="SELECT genreName AS 'Genre', genreID AS 'Genre ID' FROM gamegenre";

          $result = $con->query($genreSelect);
          echo "<div id='genreSelect'>";
          if ($result-> num_rows > 0) {
            
            $genreToEdit= $editDetails['Genre ID'];
            echo "<select name='newGenre' id='newGenre' required><option selected disabled>Select genre...</option>";
            while($row = $result->fetch_assoc()) {
              $genreID = $row['Genre ID'];
              if( $genreID == $genreToEdit ){
                echo "<option name='newGenre' value='".$row['Genre ID']."' selected>".$row['Genre']."</option> ";
              }else{
                echo "<option name='newGenre' value='".$row['Genre ID']."'>".$row['Genre']."</option> ";
              }
            }
            echo "</select><br>";
          }else{
            echo "there is nothing here";
          }

          
          $consoleSelect="SELECT consoleName AS 'Console', consoleID AS 'Console ID' FROM console";
          $result = $con->query($consoleSelect);

          echo "<div id='consoleSelect'>";
          if ($result-> num_rows > 0) {
            
            echo "<select name ='newConsole' id='newConsole' required>";
            while($row = $result->fetch_assoc()) {
              $consoleID = $row['Console ID'];
              if( $consoleID == $consoleToEdit ){
                echo "<option name='newConsole' value='".$row['Console ID']."' selected>".$row['Console']."</option> ";
              }else{
                echo "<option value='".$row['Console ID']."'>".$row['Console']."</option> ";
              }
            }
            echo "</select><br>";
          }else{
            echo "there is nothing here";
          }

          $con->close();
        ?>
        <button id="editGameBTN" type="submit" form="edit" value="submit">Edit</button><button id="cancelButton" data-role="back">Cancel</button>
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