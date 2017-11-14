<!DOCTYPE HTML>
<HTML>
<head>
    <title> New user</title>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.js"></script>
	<script src="redirect.js"></script>
    <script src="script.js"></script>

<style>
    label.error { float: none; color: red; padding-left: .5em; padding-top: .5em; margin-left:.5em; margin-right:.5em; vertical-align: top; border-top: 1px solid #e1e1e1;}
</style>
<?php      
    require 'dbconx.php';   
  
?>
   
<body>
      
<div class="form">  

    <div data-role="page" id="home">

    <div data-role="header" role="banner">
        <p>Create Account</p>
    </div>

    <div data-role="main" id="content">
    <form id="register" action='reg.php' method="post" accept-charset='UTF-8' data-ajax="false">
    
        <fieldset >
            <legend>Register</legend>
            <input type='hidden' class="newUserInput" name='submitted' id='submitted' value='1'/>
            
            <p>
                <label for='name' >First Name: </label>
                <input type='text' class="newUserInput" name='firstName' id='firstName'/>
            </p>

            <p>
                <label for='name' >Last Name: </label> 
                <input type='text' class="newUserInput" name='lastName' id='lastName'/>
            </p>

            <p>
                <label for='email' >Email Address:</label>
                <input type='text' class="newUserInput" name='email' id='email'/>
            </p>

            <p>
                <label for='password' >Password:</label>
                <input type='password' class="newUserInput" name='password' id='password'/>
            </p>

            <p>
                <label for='password' >Confirm Password:</label>
                <input type='password' class="newUserInput" name='confirm' id='confirm'/>
            </p>

            <br> <br>
            <input type='submit' name='register' value='Register'/>
            <p class="message">Already registered? <a id="login.php">Login here.</a></p>
        </fieldset>

    </form>
    </div>
	

	<div data-role="footer" id="footer">
        <button id="btnFeeds">Feeds</button>
        <button id="btnFeedback">FeedBack</button>
        <button id="btnLogin" >Log In</button>
     </div>

	 </div>
</div>  
<?php
$con->close();
?>
</body>
</html>