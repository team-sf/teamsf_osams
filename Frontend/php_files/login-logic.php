<?php

include "../../classes/connection.php";
include "../../classes/controller.php";;
include "../../classes/user.php";



$connection =  new Database();
$control = new Controller();
$user = new User();


if(isset($_POST['submit']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
	//$pass =  password_hash($password, PASSWORD_DEFAULT);
	$test = $user->login($email, $password);
	//echo $test;

}





