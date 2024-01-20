<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);

$db_hostname = 'localhost';
$db_username = file_get_contents('username.txt');
$db_password = file_get_contents('password.txt');
$db_database = '87599_database';


$mysqli = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

if (!$mysqli){
	echo "Fout: Geen connectie naar database. <br>";
	echo "Error: " . mysqli_connect_error() . "<br/>";
	exit;
}