<?php include 'db.php';
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
   
   <?php
// Check if user is logged in using the session variable
  // Check if user is logged in using the session variable
  if ( $_SESSION['ACTIVE'] != 1 ) {
    $_SESSION['message'] = "You must log in before viewing your profile page!";
    header("location: error.php");
    exit();
  }
  
  else {
      // Makes it easier to read
      $username = $_SESSION['username'];
       

  }
     
  

  ?>
   
<title> Admin <?= ucwords($username) ?></title>

    

    <!-- Bootstrap core CSS-->
    <link href="admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="admin/css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1 text-white">WELCOME <?= ucwords($username) ?></a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="mainpage.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Members</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Main Page:</h6>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="videos.php">
            <i class="fas fa-fw fa-video"></i>
            <span>Videos</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="testimony.php">
            <i class="fas fa-fw fa-comments"></i>
            <span>Testimony</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="activities.php">
            <i class="fas fa-fw fa-comments"></i>
            <span>Activities</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Members</li>
          </ol>

          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-users"></i>
                  </div>
                  <div class="mr-5"><?php
                  $result= $mysqli->query("select * from member" ) or die ($mysqli->error);
                  ?>
                  <b> <?php echo $result->num_rows; ?></b>  Members</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" >
                  <span class="float-left">Check the Table below</span>
                  <span class="float-right">
                    <i class="fas fa-angle-down"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-video"></i>
                  </div>
                  <div class="mr-5">
                  <?php
                  $result= $mysqli->query("select * from videos" ) or die ($mysqli->error);
                  ?>
                  <b> <?php echo $result->num_rows; ?></b>
                 Videos!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="videos.php">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                  </div>
                  <div class="mr-5">
                  <?php
                  $result= $mysqli->query("select * from testimony" ) or die ($mysqli->error);
                  ?>
                  <b> <?php echo $result->num_rows; ?></b>
                   Testimony!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="testimony.php">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-comments"></i>
                  </div>
                  <div class="mr-5">
                  <?php
                  $result= $mysqli->query("select * from activities" ) or die ($mysqli->error);
                  ?>
                  <b> <?php echo $result->num_rows; ?></b>
                   Activities!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="activities.php">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>

          
         <!--DataTables Card-->
                      <div>
                      <?php include 'modal_addmem.php';?>
                    </div>
                    <br>
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Table Example</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>DOB</th>
                      <th>Address</th>
                      <th>Email</th>
                      <th>Phone Number</th>
                      <th>Group</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>DOB</th>
                      <th>Address</th>
                      <th>Email</th>
                      <th>Phone Number</th>
                      <th>Group</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php

                  $result= $mysqli->query("SELECT * FROM member") or die ($mysqli->error);
                  while ($row=$result->fetch_assoc() ){
                  $id=$row['id'];
                  ?>
                  <tr>
                  <td> <?php echo $row ['fname']; ?></td>
                  <td> <?php echo $row ['lname']; ?></td>
                  <td> <?php echo $row ['dob']; ?></td>
                  <td> <?php echo $row ['address']; ?></td>
                  <td> <?php echo $row ['email']; ?></td>
                  <td> <?php echo $row ['phone']; ?></td>
                  <td> <?php echo $row ['department']; ?></td>
                  <td>
                    <a href="edit.php<?php echo '?id='.$id; ?>" class="btn btn-primary"> <span class="fas fa-pencil-alt" style="font-size:20px; color:white"></span></a>
                     <a href="#delete<?php echo $id;?>"  data-toggle="modal"  class="btn btn-danger" ><span class="fa fa-trash" style="font-size:20px; color:white"></span></a>
                  </td>


                     <div div id="delete<?php  echo $id;?>" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 id="myModalLabel" class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <label for="exampleInputEmail1" class="alert alert-danger">Are you Sure you want Delete?</label>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-hidden="true">No</button>
        <a href="deletemem.php<?php echo '?id='.$id; ?>" class="btn btn-danger">Yes</a>
      </div>
    </div>
  </div>
</div>
                  </tr>
             <?php } ?>


                   
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
          Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="admin/vendor/jquery/jquery.min.js"></script>
    <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    
    <script src="admin/vendor/datatables/jquery.dataTables.js"></script>
    <script src="admin/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="admin/js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="admin/js/demo/datatables-demo.js"></script>
    <script src="admin/js/demo/chart-area-demo.js"></script>

  </body>

</html>
