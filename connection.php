<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test6";
$connection = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($connection, "utf8");
if(!$connection) {
	echo "There is no connection with database";
}