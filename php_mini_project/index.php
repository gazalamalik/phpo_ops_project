<?php 
include 'User.php';
 $obj = new User_Table();
 //echo $_POST['pwd'];

 //die('here');

 if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['pwd'])) {
  //die('here');
   $result = $obj->register_user($_POST['name'],$_POST['email'],$_POST['pwd']);
    header('Location:welcome.php');

  
  // print_r($result);

  // die('here');






}

?>