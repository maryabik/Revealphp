<?php
	include('db.php');

session_start();
 if(!isset($_POST['update'])){
   $_SESSION['message'] = "You have entered wrong password, try again!";
   header("location: error.php");
 } else {
                    $username=$mysqli->escape_string($_SESSION['username']);
  									$fname= $mysqli->escape_string($_POST['fname']);
  									$lname= $mysqli->escape_string($_POST['lname']);
  									$address= $mysqli->escape_string($_POST['address']);
  									$email= $mysqli->escape_string($_POST['email']);
  									$phone= $mysqli->escape_string($_POST['phone']);
  									$dob= $mysqli->escape_string($_POST['dob']);
  									$group= $mysqli->escape_string($_POST['department']);
  									

if ($username=$_SESSION['username']){
  						$mysqli->query("INSERT INTO member (fname,lname,address,email,phone,dob,department)
  						VALUES ('$fname','$lname','$address','$email','$phone','$dob','$group')")
              or die($mysqli->error);
              
                  }
                }
            
							header("location: admin.php");
?>
