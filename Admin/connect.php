<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'jsuars';

$conn = new MYSQLI($host, $user, $pass, $db_name);

 if ($conn -> connect_error){
 	die('Database connection error: '.$conn->connection_error);
 }