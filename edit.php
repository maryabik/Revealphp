<?php
include 'db.php';
$ID=$_GET['id'];
 ?>


  <!-- Bootstrap core CSS-->
  <link href="admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Page level plugin CSS-->
  <link href="admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="admin/css/sb-admin.css" rel="stylesheet">


              <?php
             
if (isset($_POST['update'])) {
                  $fname_save=$mysqli->escape_string( $_POST['fname']);
                  $lname_save= $mysqli->escape_string($_POST['lname']);
                  $dob_save= $mysqli->escape_string($_POST['dob']);
                  $address_save= $mysqli->escape_string($_POST['address']);
                  $email_save= $mysqli->escape_string($_POST['email']);
                  $phone_save= $mysqli->escape_string($_POST['phone']);
                  $department_save= $mysqli->escape_string($_POST['department']);
                  

$mysqli->query(" UPDATE member SET fname = '$fname_save' , lname ='$lname_save', dob ='$dob_save',address = '$address_save' , email ='$email_save' , phone = '$phone_save', department = '$department_save'  WHERE id = '$ID' ") or die($mysqli->error);
                       header("location:admin.php");

                     }
                ?>


<body class="bg-white">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Edit</div>
      <div class="card-body">
        <?php
  $query=$mysqli->query("select * from member where id='$ID'")or die(mysql_error());
  $row= $query->fetch_assoc();
  ?>
        <form  method="POST" >
          <hr>
          <h4>Personal Information</h4>
        </hr>
          <div class="form-group">
          <label for="exampleInputName" style="color:#3a87ad;">First name</label>
          <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Change First Name"  name="fname" value=<?php echo $row['fname']; ?>>
          </div>
            <div class="form-group">
            <label for="exampleInputLastName" style="color:#3a87ad;">Last name</label>
            <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Change Last Name" name="lname" value=<?php echo $row['lname']; ?>>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1" style="color:#3a87ad;">DOB</label>
          <input class="form-control" type="text" aria-describedby="nameHelp" placeholder="Change DOB" name="dob"  value=<?php echo $row['dob']; ?>>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1" style="color:#3a87ad;">Address</label>
          <input class="form-control" type="text" aria-describedby="nameHelp" placeholder="Change Address" name="address"  value=<?php echo $row['address']; ?>>
        </div>
          <div class="form-group">
            <label for="exampleInputEmail4" style="color:#3a87ad;">Email</label>
            <input class="form-control" id="exampleInputEmail4" type="email" aria-describedby="emailHelp" placeholder="Change Email" name="email"  value=<?php echo $row['email']; ?>>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail2" style="color:#3a87ad;">Phone Number</label>
            <input class="form-control" id="exampleInputEmail2" type="text" aria-describedby="nameHelp" placeholder="Change Phone Number" name="phone"  value="<?php echo $row['phone']; ?>">
          </div>
          <div class="form-group">
          <label for="exampleInputEmail1" style="color:#3a87ad;">Derartment</label>
          <input class="form-control" type="text" aria-describedby="nameHelp" placeholder="Change Department" name="department"  value=<?php echo $row['department']; ?>>
        </div>
          <div class="form-group">
          <button type="submit" name="update" class="btn btn-success" style="margin-right: 65px;">Save</button>
 					<a href="admin.php" class="btn btn-success">Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>




                
                <!-- Bootstrap core JavaScript-->
                <script src="admin/vendor/jquery/jquery.min.js"></script>
                <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                <!-- Core plugin JavaScript-->
                <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>
                <!-- Page level plugin JavaScript-->
                <script src="admin/vendor/chart.js/Chart.min.js"></script>
                <script src="admin/vendor/datatables/jquery.dataTables.js"></script>
                <script src="admin/vendor/datatables/dataTables.bootstrap4.js"></script>
                <!-- Custom scripts for all pages-->
                <script src="admin/js/sb-admin.min.js"></script>
                <!-- Custom scripts for this page-->
                <script src="admin/js/sb-admin-datatables.min.js"></script>
                <script src="admin/js/sb-admin-charts.min.js"></script>
</body>
</html>
