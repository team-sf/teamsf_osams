<?php


include 'connection.php';
include 'controller.php';

$up= new Controller();

$column = array("town_name", "town_province", "town_region", "logo");
$values = array("MASANTOL", "PAMPANGA", "CENTRAL LUZON", "SAMPLE.PNG");

$res = $up->update("town_tbl", $column, $values, 1);