<?php

class DB {  

    public $db;

    public function __construct() {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
	     $host = "host = 127.0.0.1";
	     $port = "port = 5432";
	     $dbname = "dbname =mini_project";
	     $credentials = "user = postgres password=postgres";
 
	     $this->db = pg_connect( "$host $port $dbname $credentials"  );
	            if(!$this->db) {
	                 echo "Error : Unable to open database\n";
	            } else {
	               // echo "database connect successfully \n <br>";
	            }
	}
	//for login form 
	
	public function query_login($sql) {
		$ret = pg_query($this->db, $sql);
		$row = pg_num_rows($ret);

		//print_r($row);
		//die('dv');
		return $row;
	}

	//for ragister form it goes to the user.php file and then validation 

	public function query_ragister($sql1) {
		$ret = pg_query($this->db, $sql1);
		$row = pg_num_rows($ret);

		
		return $row;
	
	}
	//for table to show all records are show in the table 

	public function TableList(){

		$query= "select * from users";
		$getQuery = pg_query($this->db, $query);
		//$getData = pg_fetch_array($ret);
        //echo "<pre>";print_r($getData); die;
		$responseArray = array();
        while($data = pg_fetch_array($getQuery)){
		  //echo "<pre>"; print_r($data); 
			$responseArray[] = $data;
         }
			return $responseArray;
	}

	//to get all the data for updation the details 


	public function getFormData($id){
		$query= "select * from users where id ='".$id."' ";
		$getQuery = pg_query($this->db, $query);
		$getData = pg_fetch_array($getQuery);
		//echo "<pre>";print_r($getData); die;
		return $getData;
	}

	public function updateData($data , $id){

		$query = "UPDATE users set username = '".$data['name']."', email= '".$data['email']."',password = '".$data['pwd']."' where  id= '".$id."' ";

		$runQuery =pg_query($this->db, $query);
		if($runQuery)
		{
			return true;
		}else{
			return false;

		}
	}

	//for dalete a record into the table 


	public function deleteData($id){

		$query = "delete from users where  id = '".$id."' ";

		$getQuery =pg_query($this->db, $query);
		if($getQuery){
			 return true;
			 
		}else{
			return  pg_error($this->db);
		}

	}

//posts functions  for insert post 

	public function postDemo($title , $sort, $long ){
		
	
		
		  $sql1 = "INSERT INTO posts (title , sort_desc,long_desc) Values('$title' ,'$sort','$long')";
		  $ret = pg_query($this->db, $sql1);
		  $row = pg_num_rows($ret);
		
		 if($row)
		 {
		  // echo "done";
		   return true;
		 }else{
			//echo "please try again ";
		 }
	 }   
		

	 //to display the post
	 
	 public function DisplayPosts(){
		

		$query= "select * from posts";
		$getQuery = pg_query($this->db, $query);
		//$getData = pg_fetch_array($ret);
        //echo "<pre>";print_r($getData); die;
		$responseArray = array();
		
        while($data = pg_fetch_array($getQuery)){
		  //echo "<pre>"; print_r($data); 
			$responseArray[] = $data;
         }
			return $responseArray;
	}


	 //  to delete a post 
	public function deletePosts($id){

		$query = "delete from posts where  id = '".$id."' ";

		$getQuery =pg_query($this->db, $query);
		if($getQuery){
			 return true;
			 
		}else{
			return  pg_error($this->db);
		}

	}
  //get all the post to update it 

	public function getPostData($id){


		$query= "select * from posts where id ='".$id."' ";
		$getQuery = pg_query($this->db, $query);
		$getData = pg_fetch_array($getQuery);
		//echo "<pre>";print_r($getData); die;
		return $getData;
	  

	}
	public function updatePost($data , $id){

		$query = "UPDATE posts set title = '".$data['title']."', sort_desc = '".$data['sort']."',long_desc = '".$data['long']."' where  id= '".$id."' ";

		$runQuery =pg_query($this->db, $query);
		if($runQuery)
		{
			return true;
		}else{
			return false;

		}
	}


	//user profile record function 

	public function userProfileInsert( $fname, $lname, $gender, $dob, $img, $address, $pan ){
		
	
		
		$sql1 = "INSERT INTO  (firstnamepe , lastname, gender, dob, profile_pick, address, pan_card) Values('$fname' ,'$lname','$gender','$dob', '$img', '$address' , '$pan')";
		$ret = pg_query($this->db, $sql1);
		$row = pg_num_rows($ret);
	  
	   if($row)
	   {
		// echo "done";
		 return true;
	   }else{
		  //echo "please try again ";
	   }
   }   
	
	
   
   //test 

   public function query($country_id,$key,$name,$native,$phone,$continent,$capital, $currency, $languages , $emoji ,$emojiU){
		
	
		
	$sql = "INSERT INTO country (country_id,name,native,phone,continent,capital,currency,languages,emoji,emojiU) values ('$country_id','$key',' $name','$native','$phone','$continent','$capital',' $currency',' $languages ',' $emoji ','$emojiU')";
	$ret = pg_query($this->db, $sql1);
	$row = pg_num_rows($ret);
  
   if($row)
   {
	// echo "done";
	 return true;
   }else{
	  //echo "please try again ";
   }
}   
public function query1($sql) {
	$ret = pg_query($this->db, $sql);
	$row = pg_num_rows($ret);

	//print_r($row);
	//die('dv');
	return $row;
}
 
   
    public function Connection_close(){
	     pg_close($db); 
	}
}

//$con = new dbConnection();

 ?>
     
    


