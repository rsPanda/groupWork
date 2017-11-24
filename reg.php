<?php

require 'dbconx.php';

$con=db();

$firstName = mysqli_real_escape_string($con, $_POST["firstName"]);
$lastName = mysqli_real_escape_string($con, $_POST["lastName"]);
$email = mysqli_real_escape_string($con, $_POST["email"]);
$password = mysqli_real_escape_string($con, $_POST["password"]);

$addUser= "INSERT INTO users(firstName, lastName, email, password, admin) VALUES ('".$firstName."', '".$lastName."','".$email."', '".$password."', '0')";

mysqli_query($con, $addUser);

header('Location:profile.php');


?>