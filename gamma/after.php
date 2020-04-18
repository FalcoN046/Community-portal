<!DOCTYPE html>
<html>
<head>
	<title>SKlabs</title>
	<style >
	body{
			/*background-image: url(images/wp2.jpg);*/
			/*background-size: cover;*/
			background-color:  #030340
					}
		#a1b1
		{
			float: left;
		}
		/* Navbar container */
.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial;
}

/* Links inside the navbar */
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* The dropdown container */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px; 
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}

/* Add a red background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}
.h2{
	border-color: orange;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}
		</style>
			

</head>
<body>
		<img src="logos.png" style="width: 100px;" align="left">

	<!-- <h style ="color: orange; font-size: 50px ;font-family:Comic Sans MS;float: left;">PIC WALL</h> -->
	<div class="navbar">

  <a href="Project.html" style="color: orange;">Home</a>
  <a href="trending.html" style="color: orange;">Trending</a>
  	<form action ="file.php">

  		<h style="color: orange;margin-left: 365px;font-family: Arial;font-size: 30px">T E Q U E D  L A B S</h>
		
		
		<input type="button" value="Log In"  style="margin-right: : 5px; border-radius: 15px;float:right;background-color:orange; height: 30px;border-color:#030340;width:100px;height:30px;margin-top: 10px; color: #1f0254;font-family: Arial;font-size: 18px;"onclick="window.location.href='login.php'" />


		

		<input type="button" value="Sign-Up"  style=" border-radius: 15px;margin-right: 5px;float:right;background-color:orange; height: 30px;border-color: #030340;width:100px;height:30px;margin-top: 10px; color: #1f0254;font-family: Arial;font-size: 18px;"onclick="window.location.href='register.php'" />
     
	</form>
	
</div>
<h  align="left" style="color: white;margin-top: 100px; font-family:Arial;float: left ;color: orange ;
    font-size:30px;">About US</h>

</div>

</body>
</html>



