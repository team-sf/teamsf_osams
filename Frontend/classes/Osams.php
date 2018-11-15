<?php

/**
 * Created by PhpStorm.
 * User: Jayvee King
 * Date: 15/11/2018
 * Time: 9:08 PM
 */
class Osams extends DatabaseHelper
{
    public function updateCart($sqlStatement){
        $queryStatement = $this->dbConnect()->query($sqlStatement);
    }

    public function select($sqlStatement){
        $queryStatement = $this->dbConnect()->query($sqlStatement);
        if($queryStatement->num_rows > 0){
            while($fetchStatement = $queryStatement->fetch_assoc()){
                $result[] = $fetchStatement;
            }
            return $result;
        }
    }
}