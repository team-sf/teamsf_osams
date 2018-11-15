<?php

session_start();
class User extends Database
{	
	private $username;
	private $hashed_password;
	private $password;
	public $myArray = array();

	public function generateUsername($account_type)
	{
		$query = "SELECT user_name FROM user_tbl";
		$result = $this->connect()->query($query);
		if($result->num_rows > 0){

		    while($row = $result->fetch_assoc()) {
		            $res[] = $row;
		    }

		    for ($i=0; $i <=count($res)-1 ; $i++) { 
		    	$data = $res[$i]['user_name'];
		    	$data2 = explode(".", $data);
		    	$data3[] = $data2[0];
		    }

			do{
				$nums = str_shuffle("1234567890");
				$random = substr($nums, 0, 8);
				$this->username = $random.".".$account_type;
			} while(in_array($this->username, $data3));
		}
		else
		{
			echo 0;
		}
	}

	public function generatePassword()
	{
        $characters = str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ');
        $charactersLength = strlen($characters);
	    $pass = substr($characters, 0, 8);
	    $this->password = $pass;
	    $this->hash($this->password);
	}

	public function register($type)
	{
		$this->generateUsername($type);
		$this->generatePassword();
		$query = "INSERT INTO user_tbl (user_name, user_password, user_totallogin, user_isactive, user_isdel) VALUES ('".$this->username."', '".$this->hashed_password."', 0, 0, 0);";
		return $this->connect()->query($query);
	}

	public function hash($pass)
	{
		$result = $this->hashed_password = password_hash($pass, PASSWORD_DEFAULT);
		return $result;
	}

	public function printUsername()
	{
		echo $this->username;
	}
	public function printPassword()
	{
		echo $this->password;
	}

	public function login($username, $password)
	{
		
		$query = "SELECT * from user_tbl WHERE user_email= '".$username."'";
		if ($result = $this->connect()->query($query)) {

		    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
		            $this->myArray[] = $row;
		    }
		    json_encode($this->myArray);
		}

		$verify = password_verify($password, $this->myArray[0]['user_password']);
		if ($verify) {
		   	# code...
			echo 1;

			if($this->myArray[0]['accnt_type']=="seller")
			{
				header("Location: /teamsf_osams/backend/index.php");
				$_SESSION['username'] = $this->myArray[0]['user_email'];
			}
			else
			{
				header("Location: /teamsf_osams/frontend/index.php");
				$_SESSION['username'] = $this->myArray[0]['user_email'];
			}
		} else {
			# code...
		    echo "INVALID!";
		}
	}
	public function logout()
	{
		
	}
}