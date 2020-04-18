<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Create user</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
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





	<div>

		<h2 style="color: #0091FF;text-align-last: center;margin-top: 50px;">Admin - create user</h2>

	</div>
	
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
			<label>User type</label>
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
			
			<input type="password" placeholder="Password" name="password_2">
		</div>
		
		<div class="input-group">
			<button type="submit" class="btn" name="register_btn" style="color: #030340;margin-left: 5px;"> + Create user</button>
			


			

		</div>
		<input type="button" value="Back" name="register_btn" type="submit" clas="btn" style="color: blue"onclick="window.location.href='/gamma/home.php'" />
	</form>
</body>
</html>