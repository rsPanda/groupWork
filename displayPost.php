<?php
 
$con = db();

if(isset ($_SESSION["loggedIn"])){
	if($_SESSION["loggedIn"] >= 2){
	  $canEdit='yes';
	}
}else{
  $canEdit='no';
}

/***

	The below variable for $userSearch fetches the user inputed search and will get rid of any white space at the beginning/end of the input, and negating any code that can be entered into the search protecting from hackers.

	The part that is "searchInput" is the variable that contains what the user has entered on the previous page, change to suit.

	***/
	

	$sql_search = "SELECT gamenews.articleId AS 'Article ID', gamenews.gameID AS 'Game ID', gamenews.articleName AS 'Name', gamenews.articleDate AS 'Date', gamenews.articleDesc AS 'Description', gamenews.outletID AS 'Outlet ID', newsoutlet.outletName AS 'Outlet Name', gamenews.articleLink AS 'Article Link', gamelist.gameName AS 'Game Name', gamelist.gameImg AS 'Game Art' FROM gamenews LEFT JOIN newsoutlet ON gamenews.outletID=newsoutlet.outletID LEFT JOIN gamelist ON gamenews.gameID=gamelist.gameID";


	
	//This IF statement will display either the full list of games, or the user inputed search.
	if (isset($con, $_GET["news"])){
		$userSearch=trim(mysqli_real_escape_string($con, $_GET["news"]));
		$sql_search = $sql_search." WHERE gamelist.gameName LIKE '%".$userSearch."%'";		
	}	


	$result = $con->query($sql_search); 
	


	/***

	The below if statement if resposible for what is displayed on the page.

	If there are results from the search then a while statement will go through the returned results and display then on the page.

	If no result are found then a statement will be made to the user that there are no results.

	***/
	

	if ($result-> num_rows > 0){
		
		while($row = $result->fetch_assoc()) {
			echo "<section class='container'>".$row['Name']."<div class='articleImage'><img src='assets/gameArt/".$row['Game Art']."' alt='Picture for ".$row['Game Name']."'/></div>".$row['Description']."<br><br> To find out more:<a href='".$row['Article Link']."'>".$row['Outlet Name']."</a>";
			if ($canEdit == 'yes'){	
		        echo"<div class='articleButtons'>
		         <ul data-ajax='false'>
		        <li class='edit'><a href='editPost.php?post=".$row['Article ID']."' data-ajax='false'><i class='fa fa-pencil-square-o'></i></a></li>
		        <li class='cross'><a href='editContent.php?editBy=deletePost&&forDelete=".$row['Article ID']."' data-ajax='false'  onclick=\"return confirm('Are you sure you want to delete this item?');\"><i class='fa fa-times'></i></a></li>
		        </ul></div>";
		  	}
		  	echo "</section>";
		  	echo "<div id='bottom-spacer'></div>";
		}
	}else{
		echo "No results have been found matching your search";
	};

?>