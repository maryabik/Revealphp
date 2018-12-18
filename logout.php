<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Log Out</title>
  <!-- Bootstrap core CSS-->
  <link href="admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="admin/css/sb-admin.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <br>
    <br>
    <br>
    <br>
  <div class="card" style="width: 50rem;">
    <div class="card-header">
    Logged Out
    </div>
    <div class="card-body">
      <h5 class="card-title"></h5>
      <p class="card-text">
    <h1><b>Thanks for stopping by</b></h1>
          <p><?= 'You have been logged out!'; ?></p>
          </p>
          <a href="login.php" class="btn btn-primary">Log in</a>
          <a href="mainpage.php" class="btn btn-primary">Home</a>
         </div>
       </div>
     </div>
     <!-- Bootstrap core JavaScript-->
     <script src="admin/vendor/jquery/jquery.min.js"></script>
     <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
     <!-- Core plugin JavaScript-->
     <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>
     </body>
     </html>