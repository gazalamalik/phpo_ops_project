<?php
include 'dbConnection.php';


   $obj1 = new  DB ();

 // $record = $obj1->updateData();
  // echo "<pre>"; print_r($record);die;
//to fetch data into the form and then edit it 



if($_GET['id']){
   
   $editData = $obj1->getPostData($_GET['id']);
}
if(isset($_POST['update'])){
    $updates = $obj1->updatePost($_POST, $_GET['id']);
    if($updates){
        header('Location: postsDisplay.php');
    }else{
        echo "error";
    }
}
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
      <label for="title" >Title:</label>
      <input type="text" class="form-control" placeholder="Enter Title Name" name="title" required style='border: 1px solid black;' value="<?php echo $editData['title']?>" />
    </div>
    
    <div class="form-group">
      <label for="sort">short_desc:</label>
      <input type="body" class="form-control" placeholder="Write Short Here..." name="sort" style='border: 1px solid black;' value="<?php echo $editData['sort_desc']?>" />
    </div>
    <div class="form-group">
      <label for="long">long_desc:</label>
      <input type="body" class="form-control" placeholder="Write long Here..." name="long" style='border: 1px solid black;' value="<?php echo $editData['long_desc']?>" />
    </div>

    
    <input type="submit"  name="update" class="btn btn-primary" value="update">
    </form>
  <br>
        <form action="postsDisplay.php">
        <input type="submit"   name="submit" class="btn btn-primary" value="Cancel">
       </form>
</form>

</div>
</body>
</html>