<?php

include '../../classes/connection.php';
include '../../classes/controller.php';
include '../../classes/upload.php';

$upload =  new Upload();
$product = new Controller();

if(isset($_POST['submit']))
{
	$product_name = $_POST['product_name'];
	$product_price = $_POST['product_price'];
	$product_description = $_POST['product_description'];
	$product_onhand = $_POST['product_onhand'];
	$photo = $upload->uploadfile($_FILES['file']);

	$column = array("prod_name", "prod_desc", "prod_price", "prod_onhand", "image");
	$value = array($product_name, $product_description, $prod_price, $product_onhand, $photo);

	$product->create('product_tbl', $column, $value);
	header("Location: /teamsf_osams/backend/add-product.php");
}