<?php

//collecting form data submitted via POST and sanitize inputs
$firstname = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_SPECIAL_CHARS);
$lastname = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);

$errors = [];

//require text fields
if ($firstname === null || $firstname === '') {
    $errors[] = "First name should not be empty or null";
}

if ($lastname === null || $lastname === '') {
    $errors[] = "Last name should not be empty or null";
}

// email validation
if ($email === null || $email === '') {
    $errors[] = "Email should not be empty or null";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) { //validating the format 
    $errors[] = "Email must be a valid format with @";
}

if ($message === null || $message === '') {
    $errors[] = "Message should not be empty or null";
}



?>