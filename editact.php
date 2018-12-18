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




<body class="bg-white">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Edit</div>
      <div class="card-body">
        <?php
  $query=$mysqli->query("select * from activities where id='$ID'")or die(mysql_error());
  $row= $query->fetch_assoc();
  ?>
        <form  method="POST"  enctype="multipart/form-data">
          <legend><h4>File</h4></legend>
          <div class="form-group">
          <div class="form-row">
            <div class="col-md-6">
          <label class="control-label" for="inputPassword">
          <?php if($row['location'] != ""): ?>
          <?php echo $row['location']; ?>
          <?php endif; ?>
          </label>
        </div>
          <input type="file" name="image" style="margin-left:27px;">
          <button type="submit" name="submit" class="btn btn-success">Update</button>
          </div>
        </div>

          <hr>
          <h4> Information </h4>
         
          <div class="form-group">
            <label for="exampleInputEmail3"  style="color:#3a87ad;">File Name</label>
            <input class="form-control" id="exampleInputEmail3" type="text" aria-describedby="nameHelp" placeholder="Enter File Name" name="filename" value=<?php echo $row['filename']; ?>>
          </div>
         
          
      </div>
    </div>
  </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>


    <div class="modal-footer">
          <a href="videos.php" class="btn btn-success">Back</a>
          <button type="Submit"  name="update" class="btn btn-primary">Add</button>
        </div>


          </form>
     


<?php
$id=$_REQUEST['id'];

if (isset($_POST['submit'])) {

//image
              $image = $_FILES["image"] ["name"];
              $image_name= addslashes($_FILES['image']['name']);
              $size = $_FILES["image"] ["size"];

move_uploaded_file($_FILES["image"]["tmp_name"],"uploadact/" . $_FILES["image"]["name"]);
$location=$_FILES["image"]["name"];

$mysqli->query(" UPDATE activities SET location='$location' WHERE id = '$id' ")or die($mysql->error);
}
?>


              <?php
             
if (isset($_POST['update'])) {
                  $file_save= $mysqli->escape_string($_POST['filename']);
                  

$mysqli->query(" UPDATE activities SET  filename ='$file_save'  WHERE id = '$ID' ") or die($mysqli->error);
                       header("location:activities.php");

                     }
                ?>

                
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
