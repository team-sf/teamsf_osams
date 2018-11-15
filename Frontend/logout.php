<?php
@session_start();
$_SESSION['username'] = "";

header('location: login.php');
?>