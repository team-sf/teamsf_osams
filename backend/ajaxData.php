<?php
//Include the database configuration file
include '../classes/connection.php';
include '../classes/controller.php';


$province = new Controller();
$connection = new Database();

if(!empty($_POST["country_id"])){
    //Fetch all state data
    $query = $connection->connect()->query("SELECT * FROM refprovince WHERE regCode = ".$_POST['country_id']." ORDER BY provCode ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //State option list
    if($rowCount > 0){
        echo '<option value="">Select province</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['provCode'].'">'.$row['provDesc'].'</option>';
        }
    }else{
        echo '<option value="">Province not available</option>';
    }
}elseif(!empty($_POST["state_id"])){
    //Fetch all city data
    $query = $connection->connect()->query("SELECT * FROM refcitymun WHERE provCode = ".$_POST['state_id']."  ORDER BY citymunCode ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //City option list
    if($rowCount > 0){
        echo '<option value="">Select City/Municipality</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['citymunCode'].'">'.$row['citymunDesc'].'</option>';
        }
    }else{
        echo '<option value="">City/Municipality not available</option>';
    }
}
