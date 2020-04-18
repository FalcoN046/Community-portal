

<?php
include('functions.php');
if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- <div class="header"> -->
		<h2 style="color: #003366;margin-top: 10px;height: 45px;margin-left: 3px;margin-right: 3px;border-radius: 5px;background-color: #0091FF;text-align-last: center;">Home Page</h2>
	<!-- </div> -->
	<!-- <div class="content"> -->
		<!-- notification message -->
		
		<!-- logged in user information -->
		<!-- <div class="profile_info"> -->
			<!-- <img src="images/user_profile.png"  > -->

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					

					<small>
						
						<a href="index.php?logout='1'" style="color: red;float:right;margin-top:70px ;">logout</a>
					</small>
					<strong style=" float:right; color: white;font-size: 35px;;">Welcome <?php echo $_SESSION['user']['username']; ?></strong>

				<?php endif ?>
			</div>
			
		<!-- </div> -->
	<!-- </div> -->
</body>
</html>