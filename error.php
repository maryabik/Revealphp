<?php
/* Displays all error messages */
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Error Page</title>
  <!-- Bootstrap core CSS-->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <br>
    <br>
    <br>
    <br>
  <div class="card" style="width: 50rem;">
    <div class="card-header">
      Error
    </div>
    <div class="card-body">
      <h5 class="card-title"></h5>
      <p class="card-text">
        <?php

   if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):

  echo $_SESSION['message'];

   else:

   header( "location: login.php" );

   endif;

   ?>

     </p>
      <a href="login.php" class="btn btn-primary">Log in</a>
      <a href="mainpage.php" class="btn btn-primary">Home</a>
    </div>
  </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="lib/easing/easing.min.js"></script>
</body>
</html>
