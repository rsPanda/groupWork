<?php

require 'dbconx.php';

$con=db();

echo "hello";
$firstName = mysqli_real_escape_string($con, $_POST["firstName"]);
$lastName = mysqli_real_escape_string($con, $_POST["lastName"]);
$email = mysqli_real_escape_string($con, $_POST["email"]);
$password = mysqli_real_escape_string($con, $_POST["password"]);

echo $firstName;

$addUser= "INSERT INTO users(firstName, lastName, email, password, admin) VALUES ('".$firstName."', '".$lastName."','".$email."', '".$password."', '1')";

mysqli_query($con, $addUser);


?>