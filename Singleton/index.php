<?php
include "autoload.php";
$db = Database::getInstance();
$connection = $db->getConnection();
$query = "INSERT INTO users VALUES (1, 'moaaz', 'moaaz@gmail.com')";
$connection->query($query);