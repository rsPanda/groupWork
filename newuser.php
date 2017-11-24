<!DOCTYPE HTML>
<HTML>
<head>
 <title>Register</title>
 
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

  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.js"></script>

  
<script src="script.js"></script>
<style>
    label.error { float: none; color: red; padding-left: .5em; padding-top: .5em; margin-left:.5em; margin-right:.5em; vertical-align: top; border-top: 1px solid #e1e1e1;}
</style>
<?php      
    require 'dbconx.php';     
?>

</head>    
<body> 
<div data-role="page" id="home">
  <div data-role="header" id="header">      
    GAME HUB
    <div class="ui-btn-right" data-role="controlgroup" data-type="horizontal">
      <a href="homepage.php" data-transition="slideup" class="ui-btn ui-icon-home ui-btn-icon-notext ui-btn-inline ui-corner-all">Home</a>
    </div>
  </div>

  <div data-role="main" class= "loginContent">
    <form id="register" action='reg.php' method="post" accept-charset='UTF-8' data-ajax="false">
        
      <fieldset >
        <div class="form-top">
          REGISTER
        </div>
        <div class="form-bottom">
          <input type='hidden' name='submitted' id='submitted' value='1'/>

          <label for='name' >Your First Name: </label> 
          <input type='text' name='firstName' id='firstName'/>

          <label for='name' >Last Name: </label> 
          <input type='text' class="newUserInput" name='lastName' id='lastName'/>

          <label for='email' >Email Address:</label>
          <input type='text' name='email' id='email'/>

          <label for='password' >Password:</label>
          <input type='password' name='password' id='password' maxlength="50" />

          <label for='password' >Confirm Password:</label>
          <input type='password' class="newUserInput" name='confirm' id='confirm'/>

          <p><button type='submit' id='loginBTN' name='register'>Register</button></p>
          <p class="message">Already registered? <a href="login.php">Login here.</a></p>
        </div>
      </fieldset>
    </form>
	</div>	
</div>  
</body>
</html>