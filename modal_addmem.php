
<!-- Button trigger modal -->
<button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
Click to add member
</button>


      <!-- Modal -->
<div class="modal fade " id="exampleModal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title text-center" tid="myModalLabel">Add Member</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card">
  <div class="card-header">
  </div>
  <div class="card-body">
    <form method="POST" action="add.php" >
              <div class="form-group">
                <label for="exampleInputName"  style="color:#3a87ad;">Username</label>
                <input class="form-control"  type="text"  placeholder="Enter first name" value="<?= $_SESSION['username']?>" required>
              </div>
              <div class="form-group">
                <label for="exampleInputName"  style="color:#3a87ad;">First name</label>
                <input class="form-control"  type="text" aria-describedby="nameHelp" placeholder="Enter first name" name="fname" required>
              </div>
              <div class="form-group">
                <label for="exampleInputLastName"  style="color:#3a87ad;">Last name</label>
                <input class="form-control"  type="text"  placeholder="Enter last name" name="lname" required>
              </div>
          <div class="form-group">
            <label  style="color:#3a87ad;">Address</label>
            <input class="form-control"  type="text"  placeholder="Enter address" name="address" required>
          </div>
          <div class="form-group">
            <label   style="color:#3a87ad;">Email address</label>
            <input class="form-control"  type="email"  placeholder="Enter email" name="email" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail2"  style="color:#3a87ad;">Phone Number</label>
            <input class="form-control"  type="tel"  placeholder="Enter telephone" name="phone" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3"  style="color:#3a87ad;">D.O.B</label>
            <input class="form-control"  type="date"  placeholder="Enter Date of Birth" name="dob" required>
          </div>

          <div class="form-group">
            <label  style="color:#3a87ad;">Group</label>
            <select name= "department" required>
         <option value=""></option>
         <option class="form-control" value ="choir">Choir</option>
         <option class="form-control" value =" usher">Ushering Unit</option>
         <option class="form-control" value =" tc">T.C</option>
         <option  class="form-control" value =" chancellor">Chancelling Unit</option>
         <option  class="form-control" value =" jare">Jare</option>
       </select>
          <h6> Select on of the dropdowns for the field</h6>
          </div>
          <div>
           <button type="submit" name="update" class="btn btn-primary float-right">Add</button>
</div>
  </div>
</div>
</div>
</form>
      <div class="modal-footer">
      </div>
      </form>
    </div>
  </div>
</div>

</body>

</html>
