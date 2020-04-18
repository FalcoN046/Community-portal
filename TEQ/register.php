<!DOCTYPE html>
<html>
<?php include('functions.php') ?>
<head>
	<title>Registration system PHP and MySQL
		
	</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<div id="header" class="container-infinite" style="height: 80px">
		<nav class="nav pageWidth">
			<ul class="list-inline">
				<img src="http://tequedlabs.com/img/logo.png" style="height: 75px;width: 150px; float: left;">
				
			</ul>
		</nav>
	</div>


<!-- <div class="header">
	<h2>Register</h2>
</div> -->
	<h2 style="color: #0091FF;text-align-last: center;margin-top: 50px;">Register</h2>

<!-- <form method="post" action="register.php">
	<?php echo display_error(); ?>

</form> -->

<form method="post" action="register.php">
	<div class="input-group">
		
		<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>">
	</div>


	<div class="input-group">
		
		<input type="email"  placeholder="Email-Id" name="email" value="<?php echo $email; ?>">
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
		
		<input type="password" placeholder="Password" name="password_1">
	</div>


	<div class="input-group">
		
		<input type="password"  placeholder="Confirm Password" name="password_2">
	</div>


	<div class="input-group">
		<button type="submit" style="color: #0091FF;" class="btn"  name="register_btn">Register</button>
	</div>
	<div>
		<input type="button" value="Back" type="submit" clas="btn" style="color: #0091FF;margin-left: 325px;"onclick="window.location.href='after.php'" />
	</div>

	<p style="color: #0091FF;">
		Already a member? <a  style="color: #0091FF" href="login.php">Sign in</a>
	</p>
</form>
</body>
</html>