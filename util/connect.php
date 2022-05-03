<?php 
$servername ='localhost';
$login ='root';
$password ='';
$dbname ='tokura';
$con = mysqli_connect($servername,$login,$password,$dbname);
if (!$con) {
die("no connection");
}

 ?>