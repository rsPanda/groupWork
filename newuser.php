<!DOCTYPE HTML>
<HTML>
<head>
    <title> New user</title>
    <link href="stylesheet.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
<script src="redirect.js">
</script>
<script>
<?php 
// 
if(isset($_POST['username'], $_POST['password'], $_POST['name'], $_POST['email'])) {
     
    include 'dbconx.php';
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    
    $password = hash('sha512', $password);
    
    
    if ($stmt = $con -> prepare("INSERT INTO details (username, password, name, email) VALUES
    (?,?,?,?)")) {
        $stmt -> bind_param ('ssss', $username, $password, $name, $email);
        
        if (!$stmt-> execute()) {
            echo "please resgiter with valid details";
        }  else {
            echo "well done you have signed up, please go back to the <a href='login.php'> login page</a>";            
            
        }
                    
        }
}
   
    
?>
</script>
    
    <body>
      
       <div class="form">  
	   <div data-role="page" id="home">
<div data-role="header" id="header" style=" color: white; background-color: blue;">
<p>Create Account</p>
</div>

<div data-role="content" id="content">
<form id="register" action='reg.php' method="post"
    accept-charset='UTF-8'>
    
<fieldset >
    <legend>Register</legend>
    <input type='hidden' name='submitted' id='submitted' value='1'/>

    <label for='name' >Your Full Name: </label>  <br>  
    <input type='text' name='name' id='name' maxlength="50" required/>
<br>
    <label for='email' >Email Address:</label><br>
    <input type='text' name='email' id='email' maxlength="50" required />
<br>
    <label for='username' >UserName:</label><br>
    <input type='text' name='username' id='username' maxlength="50" required />
<br>
    <label for='password' >Password:</label><br>
    <input type='password' name='password' id='password' maxlength="50" required />
<br> <br>
    <input type='submit' name='register' value='Register'/>
    <p class="message">Already registered? <a href="login.html">Login here.</a></p>

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
</div>  
    </body>
	</html>