<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Home Page</title>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
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
<div data-role="header" role="banner">
<h1>Feeds</h1>
<br/>
<input type='text' id='search' placeholder='Search for a game/console/genre here'></input>
<br/>
<button id='searchBTN' value='Search'>Search</button>
</div>

<div data-role="main" id="content">
<p>Search Results And Recent Posts</p>
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