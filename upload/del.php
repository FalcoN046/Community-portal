<<?php 
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM info WHERE id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: index.php');
}
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>image</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

		<div class="upfrm">
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select Image File to Upload:
    <input type="file" name="file">
    <input type="submit" name="submit" value="Upload">
    <button style="float: right;border-radius: 15px;margin-right: 15px;background: transparent;color: white;border-color: orange;height: 30px;width:100px;margin-top: 10px">delete </button>
</form>

</div>
	<div class="container">
		<div class="gallery">
<h2>uploaded images</h2>
<?php
// Include the database configuration file
include 'dbConfig.php';

// Get images from the database
$query = $db->query("SELECT * FROM images");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["file_name"];
?>
    <img src="<?php echo $imageURL; ?>" alt="" />
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?>	
</div>
</div>
</body>
</html>