<?php


include "../../classes/connection.php";
include "../../classes/controller.php";
include "../../classes/upload.php";
include "../../classes/user.php";
include "../../classes/misc.php";

$upload = new Upload();
$connection =  new Database();
$student = new Controller();
$stud = new Controller();
$activate =  new Misc();
$user = new User();

session_start();

	if(isset($_POST["submit"])) {
		$city = $_POST['city'];
		$state= $_POST['state'];
		$country = $_POST['country'];
		$contact_number = $_POST['contact_number'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$middlename = $_POST['middlename'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$profile = $upload->uploadfile($_FILES['file']);
		// $activation_code = $activate->generateActivation();



	 	$column = array('town_name', 'town_province', 'town_region', 'town_contact_num', 'town_fname', 'town_lname',  'town_mi', 'town_mobile', 'logo');
		$value = array($city, $state, $country, $contact_number,  $firstname, $lastname, $middlename, $mobile, $profile);

		

	 	$student->create('town_tbl', $column, $value);

	 	                                                                                                                                                      

	 	$query = "SELECT MAX(id) AS 'last_id' FROM town_tbl";
	  	$con = $connection->connect()->query($query);
	  	$res = $activate->dstring($con);
	    $last_id_inserted = $res[0]["last_id"];

		$user_col = array("user_email", "user_password", "user_last_login", "user_total_login", "user_isactive", "user_isdel", "accnt_id");
		$pass = $user->hash($password);
		$user_val = array($email, $pass, 0, 0, 0, 0, $last_id_inserted);

		
		$stud->create('user_tbl', $user_col, $user_val);

	   
	 	// $_SESSION['name'] = $fname.' '.$mi.' '.$lname;
	 	$_SESSION['email'] = $email;
	 	


	 	// $activate->sendActivation($last_id_inserted, $activation_code, $email, $mobile_number, "verify_account_student");

		//echo $last_id;
	}
