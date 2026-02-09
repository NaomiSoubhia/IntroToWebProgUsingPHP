<?php
//  TODO: connect to the database 
require "includes/connect.php"; 

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die('Invalid request');
}



//   TODO: Grab form data (no validation or sanitization for this lab)
$firstName = trim(filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_SPECIAL_CHARS));
$lastName  = trim(filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_SPECIAL_CHARS));
$email     = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);


/*
  1. Write an INSERT statement with named placeholders
  2. Prepare the statement
  3. Execute the statement with an array of values
  4.

*/



//1- Write an INSERT statement with named placeholders
$sql = "INSERT INTO subscribers (first_name, last_name, email) values (:first_name, :last_name, :email)";

//2. Prepare the statement
$stmt= $pdo->prepare($sql);

//Map the named placeholder to the user data/actual data
$stmt->bindParam(':first_name', $firstName);
$stmt->bindParam(':last_name', $lastName);
$stmt->bindParam(':email', $email);
//Execute the query
$stmt ->execute();

//Close the connection
$pdo = null;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <main class="container mt-4">
        <h2>Thank You for Subscribing</h2>

        <!-- TODO: Display a confirmation message -->
        <!-- Example: "Thanks, Name! You have been added to our mailing list." -->

        <?php
        $name ="";
        echo "Thanks, $firstName! You have been added to our mailing list"
        ?>

        <p class="mt-3">
            <a href="subscribers.php">View Subscribers</a>
        </p>
    </main>
</body>

</html>