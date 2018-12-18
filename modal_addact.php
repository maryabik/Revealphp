
<!-- Button trigger modal -->
<button type="button" id="upload_id" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
Click to add
</button>

    <!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add File</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-body">
    <form method="post" action="addact.php"  enctype="multipart/form-data">
    <body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Add</div>
      <div class="card-body">
        <form>
          
          <div class="form-group">
            <label for="exampleInputEmail3"  style="color:#3a87ad;">File Name</label>
            <input class="form-control" id="exampleInputEmail3" type="text" aria-describedby="nameHelp" placeholder="Enter File Name" name="filename" required>
          </div>
          <div class="form-group">
            <div class="form-row">
                <label  style="color:#3a87ad;">Files</label>
                <input class="form-control" type="file" name="image" required>
            </div>
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
</body>

</html>

    <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="Submit"  name=submit" class="btn btn-primary">Add</button>
        </div>


          </form>
    </div>
  </div>
</div>
