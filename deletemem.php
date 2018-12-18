<?php

include('db.php');

$get_id=$_GET['id'];

$mysqli->query("delete from member where id = '$get_id' ")or die($mysqli->error);
header('location:admin.php');
?>