<?php
  include 'dbConnection.php';
  

  $obj1 = new DB();

  //$sql1 = "INSERT INTO  (firstnamepe , lastname, gender, dob, profile_pick, address, pan_card) Values('$fname' ,'$lname','$gender','$dob', '$img', '$address' , '$pan)";
	
 

 if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['gender']) && isset($_POST['dob']) && isset($_POST['img']) && isset($_POST['address']) && isset($_POST['pan'])) {
      //die('here');
     $result = $obj1->userProfileInsert($_POST['fname'],$_POST['lname'],$_POST['gender'],$_POST['dob'],$_POST['img'],$_POST['address'],$_POST['pan']);
       
     
    
     if($result){
        header('Location:welcome.php');
     }else{
         // echo "false";
    }
  }
    

      
     

  ?>
  <!DOCTYPE html>
<html lang="en">
<head>
  <title>User Profile </title>
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





<div class="container" style="border:grey; border-width:5px; border-style:solid;">
  <center><h1>User Profile</h1></center>
<div class="profile-input-field">
       <h3>Please fill these filds to complete your profile </h3>
        <form method="post" action="#" >
        
           <div class="form-group">
               <label  for="fname">First Name</label>
               <input type="text" class="form-control" name="fname" style="width:40em;" placeholder="Enter your First Name"  required />
           </div>

          <div class="form-group">
            <label  for="lname">Last Name</label>
            <input type="text" class="form-control" name="lname" style="width:40em;" placeholder="Enter your Last Name" required />
          </div>
         
         <div class="form-group">
            <label  for="gender">Gender</label>
            <input type="text" class="form-control" name="gender" style="width:40em;" placeholder="Enter your Gender" required  />
          </div>

          <div class="form-group">
            <label  for="dob">DOB </label>
            <input type="text" class="form-control" name="dob" style="width:40em;" placeholder="Enter your DOB " >
          </div>


          <div class="image_class">
            <label  for="img">Upload_img</label><br>
                 <form enctype="multipart/form-data" action="#" method="POST">
                          <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
                           Name:<input type="text" name="name" size="25" length="25" value="" style="width:30em;">
                           <input type="hidden" name="MAX_FILE_SIZE" value="300000" /><br>
                          File: <input name="userfile" type="file" size="25"/>

                          <input type="submit" value="Upload" />
                 </form>
          </div>


          <div class="form-group">
            <label  for="address">Address</label>
            <textarea type="text" class="form-control" name="address" style="width:40em;" required placeholder="Enter your Address" ></textarea>
          </div>
          <div class="form-group">
            <label for="pan">Pan card</label>
            <input type="text" class="form-control" name="pan" style="width:40em;" required placeholder="Enter your pan number" >
          </div>


          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary"><br><br>
           
          </div>
          <center>
                <a href="logout.php">Log out</a>
            </center>

        </form>
  </div>
</div>


</body>
     
</html>
      
      