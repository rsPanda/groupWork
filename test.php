<?php

require 'dbconx.php';
require 'editContent.php';

$con=db();

?>


<form id="genreInput" method="post" action="editContent.php">

	<label>Enter the game name:</label>
	<input type="text" name="newName" id="newName"><br>

	<label>Enter filepath for game image:</label>
	<input type="text" name="newImg" id="newImg"><br>


	<label>Select the game genre:</label>
<?php	
	
	$genreSelect="SELECT genreName AS 'Genre' FROM gamegenre";

	$result = $con->query($genreSelect);

	echo "<div id='genreSelect'>";
	if ($result-> num_rows > 0) {
		echo "there is something here";
		echo "<select name='newGenre' id='newGenre' required><option selected disabled>Select genre...</option>";
		while($row = $result->fetch_assoc()) {
		echo "<option>".$row['Genre']."</option> ";

		}
		echo "</select><br>";
	}else{
		echo "there is nothing here";
	}
	
?>

	<label>Enter filepath for game description:</label>
	<textarea name="newDesc" id="newDesc"></textarea><br>

	<label>Select the console:</label>
<?php	
		
	$consoleSelect="SELECT consoleName AS 'Console' FROM console";

	$result = $con->query($consoleSelect);

	echo "<div id='consoleSelect'>";
	if ($result-> num_rows > 0) {
		echo "there is something here";
		echo "<select name ='newConsole' id='newConsole' required><option selected disabled>Select console...</option>";
		while($row = $result->fetch_assoc()) {
			echo "<option>".$row['Console']."</option> ";
		}
		echo "</select><br>";
	}else{
		echo "there is nothing here";
	}
	
?>
	<label>Enter release date:</label>
	<input type="text" name="newRelease" id="newRelease"><br>

	<input type="submit" id="addGame" value="Add new game">


</form>