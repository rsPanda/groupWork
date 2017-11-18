<?php
require 'dbconx.php';
session_start();
?>

<!DOCTYPE HTML>
<HTML>
<head>
 <title>Login</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Include the CSS file-->
  <link rel="stylesheet" href="css/style.css" type="text/css">
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
  
</head>
<body>
<div data-role="page" id="home">
  <div data-role="header" id="header">      
      GAME HUB
        <div class="ui-btn-right" data-role="controlgroup" data-type="horizontal">
           <a href="homepage.php" data-transition="slideup" class="ui-btn ui-icon-home ui-btn-icon-notext ui-btn-inline ui-corner-all">Home</a>
        
    </div>
  </div>
    <!--end of header div-->
<div data-role="main">
  <div class="loginContent" >
    <form id='login' action="user.php" method="POST" data-ajax="false">  
      
      <fieldset>      
        <div class="form-top">
          LOGIN
        </div>
        <div class="form-bottom">
          <lable for="username">Username:</lable>   
          <input type="text" name="username" id="username" maxlength="50" required/>
          
          <lable for="password">Password:</lable>
          <input type="password" name="password" id="password" maxlength="50" required/>
        
          <p><button id="loginBTN">Login</button>  </p>      
          <p class="message">Not registered? <a href="newuser.php">Create an account</a></p>
          </div>
      </fieldset>
    </form>
  </div>
</div><!--end of main content div-->

</div><!--end of page div-->
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


</body>
</HTML>