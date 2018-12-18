<?php
/* Database connection settings */
$host = 'localhost';
$user = 'mary';
$pass = 'diamond';
$db = 'church';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
?>
