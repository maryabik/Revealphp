<?php
/* Main page with two forms: sign up and log in */
require 'db.php';

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Login</title>

    <!-- Bootstrap core CSS-->
    <link href="admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="admin/css/sb-admin.css" rel="stylesheet">

  </head>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if (isset($_POST['login'])) { //user logging in

       require 'logindb.php';
    }
}
?>


  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
          <form action="login.php" method="post" autocomplete="off">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputEmail" class="form-control" name="username" placeholder="Name Please" required="required" autofocus="autofocus">
                <label for="inputEmail">Username</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
           <button class="btn btn-primary btn-block" name="login"><i class="fa fa-lock">&nbsp</i>Login</button>
          </form>
          <div class="text-center">
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
          </div>
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
