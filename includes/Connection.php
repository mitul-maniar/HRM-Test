<?php
$host="localhost";
$phpmyadminusername="root"; //phpmyadmin username
$password="github1234"; //phpmyadmin password
$db="jz17"; 
//$connection=mysql_connect($host,$username,$password);
$connection=mysqli_connect($host,$phpmyadminusername,$password,$db) or die('Error connecting to database' .mysqli_error($connection));
?>