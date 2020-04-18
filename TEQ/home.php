<?php 
include('functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location:../login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
	.header {
		background: #003366;
	}
	button[name=register_btn] {
		background: #003366;
	}
	</style>
</head>
<body>
	<!-- <div class="header"> -->
		<h2 style="color: #003366;margin-top: 10px;margin-left: 3px;margin-right: 3px;border-radius: 5px;background-color: #0091FF;text-align-last: center;">Admin - Home Page</h2>
	<!-- </div> -->
	<!-- <div class="content"> -->
		<!-- notification message -->
		

		<!-- logged in user information -->
		<!-- <div class="profile_info"> -->
			<!-- <img src="../images/admin_profile.png"  > -->

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<!-- <strong style="color: ;font-size: 30px; ;"><?php echo $_SESSION['user']['username']; ?></strong> -->

					<small>
						<i  style="color:white;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="login.php" style="color: red;">logout</a>
						<!-- <a href="home.php?logout='1'" style="color: red;">logout</a> -->
                        <a href="create_user.php" style="color: white"> + add user</a>
                        <input type="button" value="update" type="submit" clas="btn" style="color: white;background-color: #0091FF;"onclick="window.location.href='display.php'" />
					</small>
					<div>
						<input type="button" value="Back" type="submit" clas="btn" style="color: #0091FF"onclick="window.location.href='index.php'" />
					</div>
				<?php endif ?>
			</div>
		<!-- </div> -->
	<!-- </div> -->
</body>
</html>