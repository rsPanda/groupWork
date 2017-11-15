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
  

<script>
<?php 
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
</head>    
    <body> 
	   <div data-role="page" id="home">
	   <div data-role="header" id="header">      
      GAME HUB
        <div class="ui-btn-right" data-role="controlgroup" data-type="horizontal">
           <a href="main.php" data-transition="slideup" class="ui-btn ui-icon-home ui-btn-icon-notext ui-btn-inline ui-corner-all">Home</a>
        </div>
    </div>

<div data-role="main" class= "loginContent">
<form id="register" action='reg.php' method="post"
    accept-charset='UTF-8'>
    
<fieldset >
    <div class="form-top">
          REGISTER
        </div>
        <div class="form-bottom">
    <input type='hidden' name='submitted' id='submitted' value='1'/>

    <label for='name' >Your Full Name: </label> 
    <input type='text' name='name' id='name' maxlength="50" required/>

    <label for='email' >Email Address:</label>
    <input type='text' name='email' id='email' maxlength="50" required />

    <label for='username' >UserName:</label>
    <input type='text' name='username' id='username' maxlength="50" required />

    <label for='password' >Password:</label>
    <input type='password' name='password' id='password' maxlength="50" required />

    <p><button id="loginBTN">Register</button></p>
    <p class="message">Already registered? <a href="login.php">Login here.</a></p>
  </div>
</fieldset>
</form>
	</div>	
</div>  
    </body>
	</html>