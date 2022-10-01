<?php

$databaseHost = 'localhost';
$databaseName = 'test2';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

$sql="CREATE TABLE `user_info` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `password2` varchar(100) NOT NULL,
  `n_id` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `relation_status` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
)";

$result = mysqli_query($mysqli,$sql);

echo "connection succesful"

?>