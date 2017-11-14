<!DOCTYPE HTML>
<HTML>
<head>
    <title> User List</title>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.js"></script>
	<script src="redirect.js"></script>
    <script src="script.js"></script>
<?php      

    require 'dbconx.php';   
    $con=db();
  
?>

</head>


<body>
	
<div data-role="page" id="home">

    <div data-role="header" role="banner">
        <p>User List</p>
    </div>

    <div data-role="main" id="content">
	
	<?php

	$sql_search = "SELECT userID AS 'User ID', firstName AS 'First Name', lastName AS 'Last Name', email AS 'email', admin AS 'Admin Level' FROM users";

	$result = $con->query($sql_search); 

	if ($result-> num_rows > 0) {
		echo "<table>";
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>Name:".$row['First Name']." ".$row['Last Name']."<br>Email: ".$row['email']."<br>Admin Level:" .$row['Admin Level']."</td><td><a href = userEdit.php?editUser=".$row['User ID']." data-ajax='false'>Make Admin</a><br><a href = userEdit.php?deleteAdmin=".$row['User ID']." data-ajax='false'>Remove Admin</a><br><a href = userEdit.php?deleteUser=".$row['User ID']." data-ajax='false'>Delete</a></td></tr>";
		}
		echo "</table>";
	}else{
		echo "No results have been found matching your search";
	};

	?>
    </div>


    <!--Add the footer-->

</div>






<style>

td{

	border-bottom: 1px solid black;
}
</style>

<?php
$con->close();
?>

</body>
</HTML>
