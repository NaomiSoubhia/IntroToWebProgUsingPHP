<?php
/* What's the Problem? 
    - PHP logic + HTML in one file
    - Works, but not scalable
    - Repetition will become a problem

    How can we refactor this code so it’s easier to maintain?
  
// This lab taught me how using include files helps avoid repetition
// and makes PHP projects easier to maintain.
// Naomi Soubhia Doi - 200645137
*/

$items = ["Home", "About", "Contact"];
require __DIR__ . "/includes/header.php";
require __DIR__ . "/includes/main.php";
require __DIR__ . "/includes/footer.php";
?>


