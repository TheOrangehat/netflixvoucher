<?php

session_start();
$_SESSION = array();
session_destroy();
header("location: login.php");
ini_set('display_errors', '0');

?>
