<?php
// main.php
// Main content of the page. Displays a list of items.
// This file is included by index.php.
?>

<ul>
<?php foreach ($items as $item): ?>
    <li><?= $item ?></li>
<?php endforeach; ?>
</ul>