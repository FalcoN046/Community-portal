<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
		<h2>Login</h2>
	</div> -->
	<h2 style="color: #0091FF;text-align-last: center;margin-top: 50px;">Login</h2>
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			
			<input type="text" placeholder="Username" name="username" >
		</div>
		<div class="input-group">
			
			<input type="password" placeholder="Password" name="password">
		</div>
		<div class="input-group">
			<button  style="color: #0091FF;float: center;"  type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<div>
			<input type="button" value="Back" type="submit" clas="btn" style="color: #0091FF;margin-left: 327px;"onclick="window.location.href='/TEQ/first.html'" />
		</div>
		<p style="color: #0091FF">
			Not yet a member? <a  style="color: #0091FF;" href="register.php">Sign up</a>
		</p>
	</form>
</body>
</html>
