 <?php

 //include ('DBConn.php');
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP PostgreSQL Registration & Login Example </title>
  <meta name="keywords" content="PHP,PostgreSQL,Insert,Login">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<style>

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  height: 100%;
 
  background-image: url("img/b3.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}

</style>
<br><br>
<div class="container" style="border:grey; border-width:5px; border-style:solid;">
  <h2>Register Here </h2>
  <form action ="index.php" method="POST">
  
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control"  placeholder="Enter name" name="name"  style="width:50em;" required>
    </div>
    
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" placeholder="Enter email" name="email" style="width:50em;">
    </div>
    
    
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" placeholder="Enter password" name="pwd" style="width:50em;">
    </div>

    
     
    <input type="submit"  name="submit" class="btn btn-primary" value="Submit">
    
   
    
  </form>
  <br>
  <form action="login.php">
  <input type="submit"   name="submit" class="btn btn-primary" value="Cancel">
  </form>
</div>
</body>
</html>
