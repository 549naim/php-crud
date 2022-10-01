<?php

$databaseHost = 'localhost';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword); 
$sql="CREATE DATABASE test2 ";
$result = mysqli_query($mysqli, $sql);



echo "connection succesful"

?>