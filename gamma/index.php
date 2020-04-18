

<?php
include('functions.php');
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}
?>





<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>TEQUED LABS</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style1.css">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="css/colors.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="host_version"> 

	<!-- Modal -->
	<div class="modal fade" >
	  <!-- <div class="modal-dialog" role="document"> -->
		<div >
			<!-- <div class="modal-header tit-up"> -->
				<button type="button"  data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 >Customer Login</h4>

			<!-- </div> -->
			
		</div>
	  <!-- </div> -->
	</div>

    <!-- LOADER -->
	<div id="preloader">
		<div class="loading">
			<div class="finger finger-1">
				<div class="finger-item">
				<span></span><i></i>
				</div>
			</div>
  			<div class="finger finger-2">
				<div class="finger-item">
				<span></span><i></i>
				</div>
			</div>
  			<div class="finger finger-3">
				<div class="finger-item">
				  <span></span><i></i>
				</div>
			</div>
  			<div class="finger finger-4">
				<div class="finger-item">
				<span></span><i></i>
				</div>
			</div>
  			<div class="last-finger">
				<div class="last-finger-item"><i></i></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->

    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="http://tequedlabs.com/img/logo.png"style="height: 75px;width: 150px; float: left;" alt="image"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    
                    	
                    
                    
                    <ul class="nav navbar-nav navbar-right">
                        <div>
						<?php  if (isset($_SESSION['user'])) : ?>
					
						<strong style=" float:right; color: #30B4D3;font-size: 35px;margin-top: 30px;">Welcome <?php echo $_SESSION['user']['username']; ?></strong>

						<?php endif ?>
						</div>


                    </ul>
                    <ul >
                    	<a href="/TEQ/first.html" style="color: #030340;margin-left:1200px ;">Logout</a>
                    </ul>


                    
                </div>
            </div> 
        </nav>
    </header>
	
    
<input type="button" value="UPLOAD IMAGES" type="submit" clas="btn" style="color: #0091FF;margin-left:1150px;" onclick="window.location.href='/upload/index.php'" /><br><br>

<input type="button" value="POST A QUESTION" type="submit" clas="btn" style="color: #0091FF;margin-left:1150px;" onclick="window.location.href='/comment/index.php'" /><br><br>

<input type="button" value="CODE UPLOAD" type="submit" clas="btn" style="color: #0091FF;margin-left:1150px;" onclick="window.location.href='/comment/index.php'" />
   
       

	

    


    
    
    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>
</html>


<?php
// Include the database configuration file
include 'dbConfig.php';
$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);


if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf','txt');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $db->query("INSERT into images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
            if($insert){
                $statusMsg = "SUCCESS!";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = '';
}

// Display status message
echo $statusMsg;
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($db, "DELETE FROM info WHERE id=$id");
    $_SESSION['message'] = "Address deleted!"; 
    header('location: index.php');
}
?>
</div>
    <div class="container">
        <div class="gallery">
<h2 style="color:  #0091FF">uploaded images</h2>
<?php
// Include the database configuration file
include 'dbConfig.php';

// Get images from the database
$query = $db->query("SELECT * FROM images");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["file_name"];
?>
    <img src="<?php echo $imageURL; ?>" height=450px  alt="" />
    <form>
<button formaction="http://localhost/comment/index.php">comment</button>
</form>
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?>  
</div>
</div>

















