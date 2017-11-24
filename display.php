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

	$sql_search = "SELECT gamelist.gameName AS 'Name', gamelist.gameDesc AS 'Description',gamelist.gameImg AS 'Game Art', gamegenre.genreName AS 'Genre', console.consoleName AS 'Console', gameID AS 'Game ID' FROM gamelist LEFT JOIN gamegenre ON gamelist.genreID=gamegenre.genreID LEFT JOIN console ON gamelist.consoleID=console.consoleID";


	
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
			// echo $row['GantArt']
			echo "<section class='container'><div class='titleName'><span><a href='post.php?news=".$row['Name']."'>".$row['Name']."</a></span></div><div class='articleImage'><img src='assets/gameArt/".$row['Game Art']."' alt='Picture for ".$row['Name']."'/></div><div class='articleDescription'><p>Genre: ".$row['Genre']."<br>Console: ".$row['Console']."<br>".$row['Description']."</p><p class='read-more'><a href='#'' class='button'>Read More</a></p></div><div class='articleButtons'>
		         <ul class='favorite' data-ajax='false'>
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
		        	echo "<a href'#'><i class='fa fa-heart-o' onclick=\"alert('To favourite you need to be a member.Not a member? Sign-up to create a free account!')\"></i></a></li></ul>";	      
		        }
		        

		        if ($canEdit == 'yes'){	
		        echo"<ul>
		          <li class='edit'><a href='editGame.php?game=".$row['Game ID']."' data-ajax='false'><i class='fa fa-pencil-square-o'></i></a></li>
		          <li class='cross'><a href='editContent.php?editBy=deleteGame&&forDelete=".$row['Game ID']."' data-ajax='false'  onclick=\"return confirm('Are you sure you want to delete this item?');\"><i class='fa fa-times'></i></a></li>
		        </ul>";
		  		}
		  		echo "</div></section>";
		}
	}
		else{
			echo "<section class='container'>No result have been found matching your search.</section>";

	}

?>

<script>
    var $el, $ps, $up, totalHeight;

$(".articleDescription .button").click(function() {
      
  totalHeight =0

  $el = $(this);
  $p  = $el.parent();
  $up = $p.parent();
  $ps = $up.find("p:not('.read-more')");
  
  // measure how tall inside should be by adding together heights of all inside paragraphs (except read-more paragraph)
  $ps.each(function() {
    totalHeight += $(this).outerHeight();
  });
        
  $up
    .css({
      // Set height to prevent instant jumpdown when max height is removed
      "height": $up.height(),
      "max-height": 9999
    })
    .animate({
      "height": totalHeight
    });
    // fade out read-more
  $p.fadeOut();
  
  // prevent jump-down
  return false;
    
});
  </script>