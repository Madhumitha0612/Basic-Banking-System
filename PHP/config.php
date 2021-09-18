<?php 

$hostname="localhost";
$username="root";
$password="";
$db="sparks_bank";

$conn=mysqli_connect($hostname,$username,$password,$db);

if($conn){
  
}

else
die("connection to this database failed due to " .mysqli_connect_error());

