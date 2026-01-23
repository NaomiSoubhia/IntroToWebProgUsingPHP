<?php
declare(strict_types=1);

/*4.) Using your local server (XAMPP, MAMP, WAMP), create a database. 
Create a file called connect.php and use PDO to connect to your database. 
Remember to include try/catch blocks to handle connection errors. 
Use include/require to include this code in index.php. Add comments to explain your code (/5 marks)
*/
$host = "localhost"; // hostname
$db = "lab1"; // database name
$user = "root"; //username
$password = ""; // password

//Points to the database
$dsn = "mysql:host=$host;dbname=$db";

//Connection, if connected show success
try{
 $pdo = new PDO($dsn, $user, $password);
  /* Show error message -  I had to look at the connection we programmed in class to 
  remember how to set the attributes */

 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 echo "<p> Success! </p>";
}
//If there is an error with the connection show the error
catch(PDOException $e){
    die("Database connection fail" . $e->getMessage());
}
?>