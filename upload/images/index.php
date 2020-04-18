<?php
  $msg = "";
  //upload butten pressed
  if(isset($_POST['upload'])){
  	//path of img store
  	$target="images/".basename($_FILES['image']['name']);
  	//connect database
  	$db=mysqli_connect("localhost","root","","photos");
  	//get all images from the form
  	$image=$_FILES['image']['name'];
  	$text=$_POST['text'];
  	$sql="INSERT INTO images(image,text) VALUES ('$image','$text')";
  	mysqli_query($db,$sql);//store img in image data base
  	//move img to folder to image
  	if (move_uploaded_file($_FILES['images']['tmp_name'], $target)) {
  		$msg="image uploaded";
  	}else{
  		$msg="not uploaded";
  	}
  }
  if (isset($_GET['del'])) {
  $image = $_GET['del'];
  mysqli_query($db, "DELETE FROM info WHERE image=$image");
  $_SESSION['message'] = "Address deleted!"; 
  header('location: index.php');
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>image upload</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="content">
  <?php
        $db=mysqli_connect("localhost","root","","photos");
        $sql="SELECT * FROM images";
        $result=mysqli_query($db,$sql);
        while ($row=mysqli_fetch_array($result)) {
          echo "<div id='img_div'>";
          echo"<img src ='images/".$row['image']."'>";
          echo "<p>".$row['text']."</p>";
          echo"</div>";
        }
  ?>
 
	<form method="post" action="index.php" enctype="multipart/form-data">
		<input type="hidden" name="size" value="1000000">
		<div>
			<input type="file" name="image">
		</div>
		<div>
			<textarea name="text" cols="49" rows="4" placeholder="upload image"></textarea>
		</div>
		<div>
			<input type="submit" name="upload" value="Upload Image">
      <input type="submit" name="delete" value="Delete Image">
		</div>
	</form>
</div>
</body>
</html>