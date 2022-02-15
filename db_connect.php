<?php
$servername="localhost";
$username="root";
$password="root";
$dbname="houserental";
$conn= mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
	die("Conection failed because refused to connect".mysqli_connect_error());
}
?>