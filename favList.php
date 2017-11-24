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
	
	$fav_search="SELECT userfav.userID AS 'User ID', userfav.gameID AS 'Game ID' FROM userfav LEFT JOIN gamelist ON userfav.gameID=gamelist.gameID WHERE userfav.userID LIKE ".$userID;

	$result = $con->query($fav_search); 
	


	/***

	The below if statement if resposible for what is displayed on the page.

	If there are results from the search then a while statement will go through the returned results and display then on the page.

	If no result are found then a statement will be made to the user that there are no results.

	***/
	

	if ($result-> num_rows > 0){
		
		while($row = $result->fetch_assoc()) {
			$currentGame=$row['Game ID'];
			$gameInfo="SELECT gamelist.gameName AS 'Name', gamelist.gameDesc AS 'Description',gamelist.gameImg AS 'Game Art', gamegenre.genreName AS 'Genre', console.consoleName AS 'Console', gamelist.gameID AS 'Game ID' FROM gamelist LEFT JOIN gamegenre ON gamelist.genreID=gamegenre.genreID LEFT JOIN console ON gamelist.consoleID=console.consoleID WHERE gamelist.gameID LIKE ".$currentGame;
			$gameResult = $con->query($gameInfo);
			$gameResult= $gameResult->fetch_assoc(); 
			// echo "<section class='container'>".$row['Name']."<div class='articleImage'><img src='assets/gameArt/".$row['Game Art']."' alt='Picture for ".$row['Game Name']."'/></div>".$row['Description']."<br><br> To find out more:<a href='".$row['Article Link']."'>".$row['Outlet Name']."</a>";
			echo "<section class='container'><div class='titleName'><span><a href='post.php?news=".$gameResult['Name']."'>".$gameResult['Name']."</a></span></div><div class='articleImage'><img src='assets/gameArt/".$gameResult['Game Art']."' alt='Picture for ".$gameResult['Name']."'/></div><div class='articleDescription'><p>Genre: ".$gameResult['Genre']."<br>Console: ".$gameResult['Console']."<br>".$gameResult['Description']."</p><p class='read-more'><a href='#'' class='button'>Read More</a></p></div></section>";

		}
	}else{
		echo "<section class='container'>You have no games currently favourited.</section>";
	};

?>