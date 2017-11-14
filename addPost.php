<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Post</title>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
<script src="redirect.js"></script>
</head>
<body>
 
    <form id="add">

    <fieldset>
        <legend>Add Post</legend>
 <?php
        require "dbconx.php";
        $con = db();
      $gameSelect ="SELECT GameID, gameName AS 'Game' FROM gamelist";

	$result = $con->query($gameSelect);

	echo "<div id='gameSelect'>";
	if ($result-> num_rows > 0) {
		
		echo "<select name='newGenre' id='newGenre' required><option selected disabled>Select genre...</option>";
		while($row = $result->fetch_assoc()) {
		echo "<option value='".$row['gameID']."'>".$row['Game']."</option> ";

		}
		echo "</select><br>";
	}else{
		echo "there is nothing here";
	}
	  
        
    ?>
    
    
        <label for='articleDesc'>Description of article</label>
        <input type='text' name='articleDesc' id='articleDesc' maxlength="50" required />
        
        <label for='articleLink'>Article Link: </label>  
        <input type='text' name='articleLink' id='articleLink' maxlength="50" required/>
          
    <br>
        <button id="addPostBTN">Add Game</button>

    </fieldset>
</form>
 
</body>
</html>