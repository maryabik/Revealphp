<?php

include('db.php');

$get_id=$_GET['id'];

$mysqli->query("delete from activities where id = '$get_id' ")or die($mysqli->error);
header('location:activities.php');
?>