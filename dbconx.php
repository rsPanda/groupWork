<?php
	
	
	/***

	This file will connect the site to the database.

	For each page of the site the following NEEDS to be included:

	required "dbconx.php";

	If this is not included the site will not connect to the database, and therefore the site will not work

	***/


	//Assigns the database details to variables which will be used in the statement to connect to the database

	function db(){
		static $con;
		$dbHost= "localhost";
		$dbUsername="root";
		$dbPassword="";
		$dbName="groupproject";


		//Statement connecting the site to the database using variables previously defined.
		$con = mysqli_connect("$dbHost", "$dbUsername", "$dbPassword", "$dbName");

		//check connection
		if(mysqli_connect_errno()){
			echo "Failed to connect to MySQL: ".mysqli_connect_error();

		}
		return $con;	
	}

?>
