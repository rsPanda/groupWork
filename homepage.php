<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Home Page</title>
  <link href="stylesheet.css" rel="stylesheet" type="text/css">
  <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
</head>
<body>
  <?php 
  require 'dbconx.php';
  ?>
  <script>
    $().ready(function(){
      $("#searchBTN").on("click", function(){
        $search=$("#search").val();
        window.location.href="homepage.php?search="+$search;
      });
    });

  </script>

  <div data-role="page" id="home">
    <div data-role="header" id="header" style=" color: white; background-color: blue;">
      <p>Feeds</p>
      <!-- <form action="search.php" method="GET"> -->
        <input type='text' id='search' placeholder='Search for a game/console/genre here' style="height: 40px;width: 250px;font-size: 10px;">
        <button id='searchBTN' style="height: 40px;width: 250px;font-size: 10px;">Search</button>
      <!-- </form> -->
      <br/>
    </div>

    <div data-role="content" id="content">
      <p>Search Results And Recent Posts</p>
      <!--This loads up with the data found in the php server-->
      <?php
        require 'display.php';
      ?>
    </div>

    <div data-role="footer">
      <script src="redirect.js"></script>
      <button id="btnFeeds">Feeds</button>
      <button id="btnFeedback">FeedBack</button>
      <button id="btnLogin">Log In</button>
      <p>&copy; GamesHub</p>
      <p>&copy; Christopher Sanderson</p>
    </div>
  </div>
</body>
</html>