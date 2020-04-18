<?php

  include 'connect.php';
   $con=mysqli_connect('localhost', 'root','','multi_login');
        


  if(isset($_POST['done']))
  {

       $id = $_GET['id'];
       $username = $_POST['username'];
       $email =  $_POST['email'];
       $user_type = $_POST['user_type'];
       $password = $_POST['password'];
       $college = $_POST['college'];
       $branch = $_POST['branch'];
       $year  =  $_POST['year'];
      $q = "UPDATE users SET username='$username',email='$email',user_type='$user_type',password='$password',college='$college',branch='$branch',year='$year' where id=$id ";




         mysqli_query($con,$q);

  header('location:display.php');
 }

?>

<!DOCTYPE html>
<html>
<head>
      <title></title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> 
</head>
<body>
   <div class="col-lg-6 m-auto">
 
      <form method="post">
 
          <br><br>

          <div class="card">
 
          <div class="card-header bg-dark">
              <h1 class="text-white text-center">  Update Operation </h1>
          </div><br>


      
          <input type="text" placeholder="Username" name="username" value="">
    
    
      
          <input type="email"  placeholder="Email" name="email" value="">
    

          <label>User type</label>
            <select name="user_type" id="user_type" >
                <option value=""></option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
    
   
      
          <input type="password" placeholder="Password" name="password">
    
    
          <input type="text"  placeholder="College" name="college" >
      


      
    
          <input type="text"  placeholder="Branch" name="branch" >
      



      
    
          <input type="text"  placeholder="Year of Study" name="year" >
      

    
          
    

          <button class="btn btn-success"  type="submit" name="done"> Submit </button><br>

  </div>
</form>
</div>
</body>
</html>
