<?php

$con = db();


/***
The below variable for $userSearch fetches the user inputed search and will get rid of any white space at the beginning/end of the input, and negating any code that can be entered into the search protecting from hackers.
The part that is "searchInput" is the variable that contains what the user has entered on the previous page, change to suit.
***/


	
	

	$sql_search = "SELECT gamelist.gameName AS 'Name', gamelist.gameDesc AS 'Description', gamegenre.genreName AS 'Genre', console.consoleName AS 'Console', gameID AS 'Game ID' FROM gamelist LEFT JOIN gamegenre ON gamelist.genreID=gamegenre.genreID LEFT JOIN console ON gamelist.consoleID=console.consoleID";


	
	//This IF statement will display either the full list of games, or the user inputed search.
	if (isset($con, $_GET["search"])){
		$userSearch=trim(mysqli_real_escape_string($con, $_GET["search"]));
		$sql_search = $sql_search." WHERE gamelist.gameName LIKE '%".$userSearch."%' OR console.consoleName LIKE '%".$userSearch."%' OR gamegenre.genreName LIKE '%".$userSearch."%'";		
	}	

	if (isset($_SESSION["userID"])){
		$user= $_SESSION["userID"];	
	}	

	$result = $con->query($sql_search); 


	/***
	The below if statement if resposible for what is displayed on the page.
	If there are results from the search then a while statement will go through the returned results and display then on the page.
	If no result are found then a statement will be made to the user that there are no results.
	***/	

	if ($result-> num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "<section class='container'><a href='post.php?news=".$row['Name']."'><div class='titleName'><span>".$row['Name']."</span></div></a><div class='articleDescription'>".$row['Genre']."<br>".$row['Console']."<br>".$row['Description']."</div><div class='articleButtons'>
		         <ul data-ajax='false'>
		          <li class='favorite'>";
		        if(isset($_SESSION["loggedIn"])){

		          	$fav_search = "SELECT gameID, userID FROM userfav WHERE gameID LIKE ".$row['Game ID']." AND userID LIKE ".$user;
		          	$fav_result=$con->query($fav_search);
		          	if ($fav_result-> num_rows > 0) {
			          	$user = $_SESSION["userID"];	          	
			            echo "<a href='fav.php?game=".$row['Game ID']."&&user=".$user."' data-ajax='false'><i class='fa fa-heart'></i></a></li></ul>";
		        	}else{
		        		echo "<a href='fav.php?game=".$row['Game ID']."&&user=".$user."' data-ajax='false'><i class='fa fa-heart-o'></i></a></li></ul>";	      
		        	}
		        }else{
		        	echo "<a href'#'><i class='fa fa-heart-o' onclick=\"alert('To favourite you need to be a member.Not a member? Sign-up to create a free account!')\"></i></a></li>";	      
		        }
		        

		        if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] >= 2 ){	
		        echo"<ul>
		          <li class='edit'><a href='#'><i class='fa fa-pencil-square-o'></i></a></li>
		          <li class='cross'><a href='#''><i class='fa fa-times'></i></a></li>
		        </ul>";
		  		}
		  		echo "</div></section>";
		}
	}

?>