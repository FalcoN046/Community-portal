 <!DOCTYPE html>
<html>
<head> 
	<title>image</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		body{
				/*background-color: #0091FF;*/
				/*text-align-last: center;*/	
				/*margin-left: 500px;*/
				/*margin-top: 200px;*/

		}
	</style>
	

</head>
<body>

	<div id="header" class="container-infinite" style="height: 80px">
		<nav class="nav pageWidth">
			<ul class="list-inline">
				<img src="http://tequedlabs.com/img/logo.png" style="height: 75px;width: 150px; float: left;">
				
			</ul>
		</nav>
	</div>








<h1 style="color:#0091FF;margin-left: 620px; "> UPLOAD IMAGE</h1>
		
<form action="upload.php" style="margin-left: 520px;margin-top: 50px;" method="post" enctype="multipart/form-data">
    Select Image File to Upload:
    <input type="file" name="file" style="color:blue;">
    <input type="submit" name="submit" value="Upload" style="color: blue;" formaction="/gamma/index.php">
   


</form>
</body>
</html>