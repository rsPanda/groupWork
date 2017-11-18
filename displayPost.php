<?php

$con = db();


/***

	The below variable for $userSearch fetches the user inputed search and will get rid of any white space at the beginning/end of the input, and negating any code that can be entered into the search protecting from hackers.

	The part that is "searchInput" is the variable that contains what the user has entered on the previous page, change to suit.

	***/
	

	$sql_search = "SELECT articleId AS 'Article ID', gamenews.gameID AS 'Game ID', gamelist.gameName AS 'Game Name', articleName AS 'Name', articleDesc AS 'Description', gamenews.outletID AS 'Outlet ID', outletName AS 'Outlet Name', articleLink AS 'Article Link' FROM gamenews LEFT JOIN gamelist ON gamenews.gameID=gamelist.gameID LEFT JOIN newsoutlet ON gamenews.outletID=newsoutlet.outletID";


	
	//This IF statement will display either the full list of games, or the user inputed search.
	if (isset($con, $_GET["news"])){
		$userSearch=trim(mysqli_real_escape_string($con, $_GET["news"]));
		$sql_search = $sql_search." WHERE gamelist.gameName LIKE '".$userSearch."'";		
	}	


	$result = $con->query($sql_search); 
	


	/***

	The below if statement if resposible for what is displayed on the page.

	If there are results from the search then a while statement will go through the returned results and display then on the page.

	If no result are found then a statement will be made to the user that there are no results.

	***/
	

	if ($result-> num_rows > 0){
		echo "<ol>";
		while($row = $result->fetch_assoc()) {
			echo "<li>".$row['Name']."<br>".$row['Description']."<br><a href='".$row['Article Link']."'>".$row['Outlet Name']."</a></li>";
		}
		echo "</ol>";
	}else{
		echo "No results have been found matching your search";
	};

?>