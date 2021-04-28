<?php  

include ('dbConnection.php');

class form{
        public function addRecord($data){
            echo "<pre>"; print_r($data); die;
            $query = "INSERT INTO users set username =  '".$data['username']."' , email = '".$data['emailId']."', password = '".$data['password']."' ";   
            
            $runQuery = pg_query($this->db, $query);

            if($runQuery){
                echo "done";
            }else{
                echo pg_errno($this->db);
            }
       
       
        }


        public function insertData($username, $email,$password, $role){
            $ret=pg_query($this->db,"insert into users(username,email,password,role) 
            values('$username','$email','$password','$role')");
            return $ret;
        }

        public function insert_user_data($username , $emailId, $password ,$role){ 
            $sql = "SELECT * FROM admin WHERE username = '$username' or email= '$email'";
        
            $check = pg_query($this->db->db, $sql);
            $count_row =pg_num_rows($check);
        
            if($count_row == 0){
              //  $sql1 = "INSERT INTO users (username , email,pass,user_role) Values ('$username' ,'$email','$password','$role')";
              $sql1 =  $sql = "SELECT name FROM admin WHERE username='$username' AND password='$password'";
                $ret = pg_query($this->db->db, $sql1);
                print_r($this->db->db);
                if($ret){
                    echo "Data saved successfully";
                    return true;
                }else{
        
                    echo "Somthing went wrong";
                    return false;
                }
        
            }
            else {
                return false;
            }
        }


        public function query($sql) {
            $ret = pg_query($this->db, $sql);
           return $ret;
        }
    
}
           

$user = new Database();



 if(isset($_POST['submit'])){
 // $user->addRecord($_POST);
    //echo "yes";die;
   // $user->insertData($_POST);
   $user->insert_user_data($_POST);
 } 

?>

<html>

<body>
    <center><form method="post" action ="">
      Name : <input type="text" name= "username" value=""><br/><br>
      Email : <input type="text" name= "emailId" value=""><br/><br>
      password : <input type="password" name= "password" value=""><br/><br>
      Role : <input type="text" name= "role" value=""><br/><br>
      

       <input type="submit" action="validate.php"name= "submit" value="Submit"><br/>
</form></center>


</body>

</html>