<?php
include ('dbConnection.php');


$obj1 = new DB();
 

if(isset($_POST['title']) && isset($_POST['sort']) && isset($_POST['long'])) {
    //die('here');
     $result = $obj1->postDemo($_POST['title'],$_POST['sort'],$_POST['long']);
     
     
    // header('Location:posts.php');
    if($result){
        header('Location:posts.php');
    }else{
       // echo "false";
    }
  
    
   
  
    
  }
  

// Insert record


 //if(isset($_POST['upload'])){

    // $upload = $obj1->postsData($_POST);
    // if($upload){
      
       //  header('Location: welcome.php');
  //   }else{
    //     echo "error";
    // }
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title> POSTS </title>
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
 
  background-image: url("img/b1.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}

</style>
<br><br>
<div class="container" style="border:grey; border-width:5px; border-style:solid;">
  <h2>POSTS HERE </h2>
  <form  method="POST" style='border: 1px solid black;'>
  
    <div class="form-group">
      <label for="name" >Title:</label>
      <input type="text" class="form-control" placeholder="Enter Title Name" name="title" required style='border: 1px solid black;'>
    </div>
    
    <div class="form-group">
      <label for="email">short_desc:</label>
      <textarea type="body" class="form-control" placeholder="Write Here..." name="short" style='border: 1px solid black;'></textarea>
    </div>
    <div class="form-group">
      <label for="email">long_desc:</label>
      <textarea type="body" class="form-control" placeholder="Write Here..." name="long" style='border: 1px solid black;'></textarea>
    </div>

    
    <input type="submit"  name="upload" class="btn btn-primary" value="upload">


    </form>
  <br>
        <form action="dashboard.php">
        <input type="submit"   name="submit" class="btn btn-primary" value="Cancel">
        <a href="postsDisplay.php">see posts</a>
       </form>
</form>

</div>
</body>
</html>