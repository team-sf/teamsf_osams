<?php

date_default_timezone_set("Asia/Manila");
class DatabaseHelper
{
    private $dbHost, $dbUser, $dbPassword, $dbName;

    public function dbConnect(){
        $this->dbHost = '172.16.123.88';
        $this->dbUser = 'teamsf_ago';
        $this->dbPassword = 'teamsf_ago';
        $this->dbName = 'otop_db';

        $dbConString = new mysqli($this->dbHost, $this->dbUser, $this->dbPassword, $this->dbName);
        return $dbConString;
    }
}