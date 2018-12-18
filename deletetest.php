<?php

include('db.php');

$get_id=$_GET['id'];

$mysqli->query("delete from testimony where id = '$get_id' ")or die($mysqli->error);
header('location:testimony.php');
?>