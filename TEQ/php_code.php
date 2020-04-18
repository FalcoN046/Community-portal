<?php 
	// session_start();
	$db = mysqli_connect('localhost', 'root', '', 'multi_login');

	// initialize variables
	$username = "";
	$branch = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['username'];
		$branch = $_POST['branch'];

		mysqli_query($db, "INSERT INTO info (name, branch) VALUES ('$username', '$branch')"); 
		$_SESSION['message'] = "branch saved"; 
		header('location: index.php');
	}
    if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$name = $_POST['username'];
	$branch = $_POST['branch'];

	mysqli_query($db, "UPDATE info SET username='$username', branch='$branch' WHERE id=$id");
	$_SESSION['message'] = "branch updated!"; 
	header('location: index.php');
     }
     if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM info WHERE id=$id");
	$_SESSION['message'] = "branch deleted!"; 
	header('location: index.php');
	}