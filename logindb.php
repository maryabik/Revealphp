<?php include 'db.php';?>
<?php
/* Registration process, inserts admin info into the database
 */
session_start();
// Set session variables to be used on profile.php page
$_SESSION['username'] = $_POST['username'];
$_SESSION['last_time'] = time();

// Escape email to protect against SQL injections
$username = $mysqli->escape_string($_POST['username']);
$result = $mysqli->query("SELECT * FROM admin WHERE username='$username'");
$user = $result->fetch_assoc();

// User exists
 if ($_POST['password'] != $user['password']){
    $_SESSION['message'] = "You have entered wrong password, try again!";
    header("location: error.php");
    exit();
}
else{
      $_POST['username'] = $user['username'];
      $_SESSION['ACTIVE'] = 1;
  }
header("location:admin.php");
  ?>


