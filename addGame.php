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
        <legend>Add Game</legend>
       
        
        <label for='gameName'>Name of Game:</label>
        <input type='text' name='gameName' id='gameName' maxlength="50" required />
        
        <label for='gameDesc'>Game Description: </label>  
        <input type='text' name='gameDesc' id='gameDesc' maxlength="50" required/>
<br>
        <?php 
        require "dbconx.php";
        $con = db();
        $genreSelect="SELECT genreName AS 'Genre' FROM gamegenre";

	$result = $con->query($genreSelect);

	echo "<div id='genreSelect'>";
	if ($result-> num_rows > 0) {
		
		echo "<select name='newGenre' id='newGenre' required><option selected disabled>Select genre...</option>";
		while($row = $result->fetch_assoc()) {
		echo "<option '".$row['Genre']."'>".$row['Genre']."</option> ";

		}
		echo "</select><br>";
	}else{
		echo "there is nothing here";
	}
	
?>
       <?php	
		
	$consoleSelect="SELECT consoleName AS 'Console' FROM console";

	$result = $con->query($consoleSelect);

	echo "<div id='consoleSelect'>";
	if ($result-> num_rows > 0) {
		
		echo "<select name ='newConsole' id='newConsole' required><option selected disabled>Select console...</option>";
		while($row = $result->fetch_assoc()) {
			echo "<option '".$row['Console']."'>".$row['Console']."</option> ";
		}
		echo "</select><br>";
	}else{
		echo "there is nothing here";
	}
	
?>
        <button id="addGameBTN">Add Game</button>

    </fieldset>
</form>

</body>
</html>