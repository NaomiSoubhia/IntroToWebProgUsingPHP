<?php 
$host = "localhost"; //hostname
$db = "subscribers"; //database name
$user = "root"; //username
$password = ""; //password


$dsn = "mysql:host=$host;dbname=$db";

//Try to connect
try {
   $pdo = new PDO ($dsn, $user, $password); 
   $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
//Show the error message 
catch(PDOException $e) {
    die("Database connection failed: " . $e->getMessage()); 
}
