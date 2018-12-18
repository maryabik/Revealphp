<?php

include('db.php');

$get_id=$_GET['id'];

$mysqli->query("delete from videos where id = '$get_id' ")or die($mysqli->error);
header('location:videos.php');
?>