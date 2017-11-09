<?php
require 'dbconx.php';
session_start();
?>

<!DOCTYPE HTML>
<HTML>
<head>
 <title>Login</title>

<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
</head>

<body>
<div data-role="page" id="home">
    <div data-role="header" role="banner">
        <p>Login</p>
    </div><!--end of header div-->

<div data-role="main" id="content">
   <div data-role="content" id="content">
 <form id='login' action="user.php" method="POST" data-ajax="false">  
    
    <fieldset>      
      <legend>Login</legend>

        <lable for="username">Username:</lable> <br>   
        <input type="text" name="username" id="username" maxlength="50" required/>
        <br>
        <lable for="password">Password:</lable><br>
        <input type="password" name="password" id="password" maxlength="50" required/>
        <br>
        <input type ="submit" name="login" id="loginBTN" value="login"/>
        <p class="message">Not registered? <a href="newuser.php">Create an account</a></p>
    </fieldset>
    </form>
</div><!--end of main content div-->


<div data-role="footer" id="footer">
	<script src="redirect.js"></script>
    <button id="btnFeeds">Feeds</button>
    <button id="btnFeedback">FeedBack</button>
    <button id="btnLogin" >Log In</button>
</div><!--end of footer div-->

</div><!--end of page div-->
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


</body>
</HTML>