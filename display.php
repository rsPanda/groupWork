<?php




/***

	The below variable for $userSearch fetches the user inputed search and will get rid of any white space at the beginning/end of the input, and negating any code that can be entered into the search protecting from hackers.

	The part that is "searchInput" is the variable that contains what the user has entered on the previous page, change to suit.

	***/


	


	$sql_search = "SELECT gamelist.gameName AS 'Name', gamelist.gameDesc AS 'Description', gamegenre.genreName AS 'Genre', console.consoleName AS 'Console' FROM gamelist LEFT JOIN gamegenre ON gamelist.genreID=gamegenre.genreID LEFT JOIN console ON gamelist.consoleID=console.consoleID";


	
	//This IF statement will display either the full list of games, or the user inputed search.
	if (isset($con, $_GET["searchInput"])){
		$userSearch=trim(mysqli_real_escape_string($con, $_GET["searchInput"]));
		$sql_search = $sql_search." WHERE gamelist.gameName LIKE '%".$userSearch."%' OR console.consoleName LIKE '%".$userSearch."%' OR gamegenre.genreName LIKE '%".$userSearch."%'";
		
	}	

	$result = $con->query($sql_search); 


	/***

	The below if statement if resposible for what is displayed on the page.

	If there are results from the search then a while statement will go through the returned results and display then on the page.

	If no result are found then a statement will be made to the user that there are no results.

	***/

	

	if ($result-> num_rows > 0) {
		echo "<ol>";
		while($row = $result->fetch_assoc()) {
			echo "<li>".$row['Name']."<br>".$row['Genre']."<br>".$row['Console']."<br>".$row['Description']."</li>";
		}
		echo "</ol>";
	}else{
		echo "No results have been found matching your search";
	};

?>