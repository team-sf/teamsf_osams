<?php
@session_start();
include 'classes/DatabaseHelper.php';
include 'classes/Osams.php';
$osams = new Osams();

$custid = $_SESSION['cust_id'];
$code = date('Ymd his');
$currentDate = date('Y-m-d');
$sum = 0;
$sqlStatement = "UPDATE cart_tbl set cart_ispaid = '1', cart_code = '$code' WHERE cart_ispaid = '0' AND cart_cust_id = '$custid'";
$osams->updateCart($sqlStatement);

$getSum = "SELECT SUM(cart_total) AS 'Total' FROM cart_tbl WHERE cart_code = '$code'";
foreach($osams->select($getSum) as $value){
    print $sum = $value["Total"];
}

print $sqlInsert = "INSERT INTO transaction_tbl() VALUES(NULL, '$sum', '$custid', '$sum', '$currentDate', '$code')";
$osams->updateCart($sqlInsert);

header("location: ubpaymentsuccess.php");