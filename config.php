<?php
/*
mysql user "root" password "" 
*/
ini_set('display_errors', '0');


define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'loginout');

// try to connetct database

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//check connection
if ($conn == false){
    dir("not connected");
}
?>