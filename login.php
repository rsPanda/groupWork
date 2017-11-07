<!DOCTYPE HTML>
<HTML>
<head>
    <title>Login</title>
    <link href="stylesheet.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
</head>
    <body>
	<div data-role="page" id="home">
<div data-role="header" id="header">
<p>Login</p>
</div>
<?php
require 'dbconx.php';
?>
<div data-role="content" id="content">
 <form id='login' action="user.php" method="POST">  
    
    <fieldset>      
      <legend>Login</legend>

        <lable for="username">Username:</lable> <br>   
        <input type="text" name="username" id="username" maxlength="50" required/>
<br>
        <lable for="password">Password:</lable><br>
        <input type="password" name="password" id="password" maxlength="50" required/>
<br>
        <input type ="submit" name="login" value="login"/>
        <p class="message">Not registered? <a href="newuser.php">Create an account</a></p>
    </fieldset>
    </form>
	</div>
	<!-- Chris has added in the button links -->
	<div data-role="footer" id="footer">
	<script src="redirect.js"></script>
<button id="btnFeeds">Feeds</button>
<button id="btnFeedback">FeedBack</button>
<button id="btnLogin" >Log In</button>
     </div>
</div>
 
    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</HTML>