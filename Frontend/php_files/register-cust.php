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
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$middlename = $_POST['middlename'];
		$mobile = $_POST['mobile'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$profile = $upload->uploadfile($_FILES['file']);
		// $activation_code = $activate->generateActivation();



	 	$column = array('cust_fname', 'cust_lname', 'cust_mi', 'cust_address', 'cust_mobile_num', 'cust_image');
		$value = array($firstname, $lastname, $middlename, $address,  $mobile, $profile);

		

	 	$student->create('customer_tbl', $column, $value);

	 	                                                                                                                                                      

	 	$query = "SELECT MAX(cust_id) AS 'last_id' FROM customer_tbl";
	  	$con = $connection->connect()->query($query);
	  	$res = $activate->dstring($con);
	    $last_id_inserted = $res[0]["last_id"];

		$user_col = array("user_email", "user_password", "user_last_login", "user_total_login", "user_isactive", "user_isdel", "accnt_id", "accnt_type");
		$pass = $user->hash($password);
		$user_val = array($email, $pass, 0, 0, 0, 0, $last_id_inserted, "customer");

		
		$stud->create('user_tbl', $user_col, $user_val);

	   
	 	// $_SESSION['name'] = $fname.' '.$mi.' '.$lname;
	 	$_SESSION['email'] = $email;
	 	


	 	// $activate->sendActivation($last_id_inserted, $activation_code, $email, $mobile_number, "verify_account_student");

		//echo $last_id;
	}
