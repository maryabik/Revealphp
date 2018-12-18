<?php
	include('db.php');

if (!isset($_FILES['video']['tmp_name'])) {
							echo "";
							}else{
							$file=$_FILES['video']['tmp_name'];
							$image = $_FILES["video"] ["name"];
							$size = $_FILES["video"] ["size"];
							$error = $_FILES["video"] ["error"];
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


									move_uploaded_file($_FILES["video"]["tmp_name"],"upload/" . $_FILES["video"]["name"]);
									$location=$_FILES["video"]["name"];
									$file_name= $_POST['filename'];
									$title= $_POST['tname'];
									$summary= $_POST['summary'];
   
						$mysqli->query("insert into videos (location,filename,tname,summary)
						values('$location','$file_name','$title','$summary')")or die($mysqli->error);
									}

									}
							}
   
	
					header("location: videos.php")

?>