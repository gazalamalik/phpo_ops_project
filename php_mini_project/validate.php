<?php
include ('dbConnection.php');
//require_once 'User.php';

session_start();

$con = new DB();


//$db = new User_Table();
    if(isset($_POST['uname']) && isset($_POST['pswd'])) {
        //die('here');
       // echo "$uname";
       unset($_SESSION['errors']);
       $uname = $_POST['uname'];
       $pswd = $_POST['pswd'];
       $sql = "SELECT username FROM  users  WHERE username ='$uname' and password = '$pswd'";
       //print_r($sql);
      // die('here');
       $row = $con->query_login($sql);
       


     //  $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
       //$ret = $db->query($sql);
      // $row = pg_fetch_row($ret);
       //echo $row;
        if($row > 0) {
          //  die('here');

            if(!empty($_POST["remember"])) {
                setcookie ("username",$_POST["uname"],time()+ 3600);
                setcookie ("password",$_POST["pswd"],time()+ 3600);
                echo "Cookies Set Successfuly";
            } else {
                setcookie("username","");
                setcookie("password","");
            } 
            $_SESSION['login'] = true;
            $_SESSION['username'] = $_POST['uname'];
            $_SESSION['password'] = $_POST['pswd'];
            $_SESSION['success'] = array("you are successfully loged in ");
            header('Location:welcome.php');
        }
        else {
            $_SESSION['errors'] = array("Username or password was incorrect.");
            
            header('Location:login.php');
        }
    }
?>