<?php

include ('Navigation/navigation.php');
//include 'Style/welcomStyle.css';

session_start();


echo "<h1>Hey Welcome :</h1>" . $_SESSION['username'];
echo "<br><a href='logout.php'>logout</a>";



?> <html>
<head></head>
<body >

<h1><center><italic>Welcome Blooger</italic></center></h1>  
   


<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  height: 100%;
 
  background-image: url("img/b.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}





</style>
</body>
</html>