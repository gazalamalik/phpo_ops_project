<?php 

//include_once 'components/header.php';
session_start();
//include('User.php');

//$object = new User_Table();




?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Login here </title>
  <meta name="keywords" content="PHP,PostgreSQL,Insert,Login">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body >


<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  height: 100%;
 
  background-image: url("img/b4.jpeg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.logo{
    color:black;
}

</style>
<div class="container" style="border:grey; border-width:5px; border-style:solid;">

<div class="d-flex justify-content-center text-primary p-3">
  <center> <h2 class="logo">Login Here </h2></center>
</div>
<br>


    <form action="validate.php" method="POST">

<!-- for wrong id pw -->
    <?php if (isset($_SESSION['errors'])): ?>
    <div class="form-errors m-auto">
        <?php foreach($_SESSION['errors'] as $error): ?>
            <p class="text-danger ml-auto"><?php echo $error ?></p>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>

    
<!--  -->
            
    



    <div class="form-group">


        <label for="uname"><h3>Username:</h3></label>
        <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" 
        value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" required>
        

    </div><br>

    <div class="form-group">
        <label for="pwd"><h3>Password:</h3></label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" 
        value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" required>
        
    </div><br>

    <div class="form-group form-check">
        <label class="form-check-label">
        <div class="invalid-feedback"><h3></b>please check this box to submit</b><h3></div>
        <input class="form-check-input" type="checkbox" name="remember" required> <small>Remember me</small>
        
        </label>
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Login</button>
    
    </form>
    <button><a href="welcome.php" >Cancel</a></button>
    
    

    <button><a href="ragister.php" >Ragister</a></button>
    
    
   
<div class="d-flex justify-content-center mt-2 mb-2">
      <center><a class="" href="#">forgot passowrd?</a></center>
     
  </div>

        </div>
  
 

</body>
<html>


<?php 
   // include_once 'components/footer.php';
?>
	 


