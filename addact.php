<?php
  include('db.php');

if (!isset($_FILES['image']['tmp_name'])) {
              echo "";
              }else{
              $file=$_FILES['image']['tmp_name'];
              $image = $_FILES["image"] ["name"];
              $size = $_FILES["image"] ["size"];
              $error = $_FILES["image"] ["error"];
              //$file_name = $_FILES["image"] ["file_name"];

              if ($error > 0){
                    die("Error uploading file! Code $error.");
                  }else{
                    if($size > 3200000000) //conditions for the file
                    {
                    die("Format is not allowed or file size is too big!");
                    }

                  else
                    {


                  move_uploaded_file($_FILES["image"]["tmp_name"],"uploadact/" . $_FILES["image"]["name"]);
                  $location=$_FILES["image"]["name"];
                  $filename= $_POST['filename'];
                  
   
            $mysqli->query("INSERT INTO activities (location,filename)
            VALUES('$location','$filename')")or die($mysqli->error);
                  }

                  }
              }
   
  
          header("location: activities.php")

?>