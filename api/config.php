<?php

$dbhost = "localhost";
$dbuser = "sinesste_john";
$dbpass = "Hunzai1122$$";
$dbname = "sinesste_john";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}

?>