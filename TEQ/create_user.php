<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL - Create user</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		.header {
			background: white;
		}
		button[name=register_btn] {
			background:white;
		}
	</style>
</head>
<body>
	<!-- <div class="header">
		<h2>Admin - create user</h2>
	</div> -->



	
	<div id="header" class="container-infinite" style="height: 80px">
		<nav class="nav pageWidth">
			<ul class="list-inline">
				<img src="http://tequedlabs.com/img/logo.png" style="height: 75px;width: 150px; float: left;">
				
			</ul>
		</nav>
	</div>







	<h2 style="color: #0091FF;text-align-last: center;margin-top: 50px;">Admin - create user</h2>

	
	<form method="post" action="create_user.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			
			<input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			
			<input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
		</div>


		<div class="input-group">
		
		<input type="text"  placeholder="College" name="college" >
	    </div>


	    <div class="input-group">
		
		<input type="text"  placeholder="Branch" name="branch" >
	    </div>



	    <div class="input-group">
		
		<input type="text"  placeholder="Year of Study" name="year" >
	    </div>

		<div class="input-group">
			<label style="color: #0091FF">User type</label>
			<select name="user_type" id="user_type" >
				<option value=""></option>
				<option value="admin">Admin</option>
				<option value="user">User</option>
			</select>
		</div>
		<div class="input-group">
			
			<input type="password" placeholder="Password" name="password_1">
		</div>
		<div class="input-group">
			
			<input type="password" placeholder="Confirm Password" name="password_2">
		</div>
		<div class="input-group">
			<!-- <button type="submit" class="btn" name="register_btn" > + Create user</button> -->


		<input type="button" value="create" type="submit" class="btn" name="register_btn" style="color: #0091FF;margin-left:25px;margin-bottom:5px;
		"onclick="window.location.href='login.php'" />



		<input type="button" value="update" type="submit" clas="btn" style="color: #0091FF;margin-left:25px;margin-bottom:5px;"onclick="window.location.href='display.php'" />
		<input type="button" value="Back" type="submit" clas="btn" style="color: #0091FF"onclick="window.location.href='index.php'" />

		</div>
	</form>
</body>
</html>