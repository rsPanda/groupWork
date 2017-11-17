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
    <form id="edit" action="editContent.php" method="Get">

    <fieldset >
        <div class="form-top">
          Add Post
        </div>  
        <div class="form-bottom">   
        <input type="hidden" id="gameID" value="<?php echo $row['gameID']; ?>" />

        <select name="game" id="game">
            <option>Select Game...</option>
            <option value="">Game 1</option>
            <option value=""> Game 2</option>
            <option value=""> Game 3</option>
            <option value=""> Game 4</option>
        </select>

        <label>Post Title</label>
            <input type="text" name="title" id="title" placeholder="Post Title Here">

        <label>Contents</label> 
            <textarea id="contents" name="contents" placeholder="Post Contents Here"></textarea>

        <label>Link</label>
            <input type="url" name="postLink" placeholder="Post Link Here">
            
        
        <!-- <label for="gameName">Game name: </label> 
        <input type="text" name="gameName" value="<?php echo $row['gameName'] ?>" /> 
        

        <label for='gameDesc'>Game Description: </label>  
        <input type="text" name="gameDesc" value="<?php echo $row['gameDesc'] ?>"/>

        <label for='genreName'>Genre:</label>
        <input type="text" name="genreName" value="<?php echo $row['genreName'] ?>"/>
        

        <label for='consoleName'>Console: </label>
        <input type="text" name="consoleName" value="<?php echo $row['consoleName'] ?>"/> -->
        <button id="okayButton">Add</button><button id="cancelButton" data-role="back">Cancel</button>
   </div>
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