<?php

class Database
{
	private $hostname;
	private $username;
    private $password;
    private $database;


	public function connect()
	{
		$this->hostname = "localhost";
    	$this->username ="root";
    	$this->password = "";	
    	$this->database = "teamsf_db";

		$connection = new mysqli($this->hostname, $this->username, $this->password, $this->database);
        return $connection;	
	}
}

