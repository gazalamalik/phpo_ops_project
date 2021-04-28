<?php
include 'dbConnection.php';


   $obj1 = new  DB ();

  $record = $obj1->TableList();
  // echo "<pre>"; print_r($record);die;
//to fetch data into the form and then edit it 

  if(isset($_GET['id'])){
      $del = $obj1->deleteData($_GET['id']);
      if($del){
          header('Location: TableData.php');
      }else{
          echo $del;
      }
  }


?>

<!DOCTYPE html>
<html lang="en">
<head></head>
<body>

click here to add data : <a href="ragister.php">ragister</a><br>


<table border="1" width=40% >

        <tr>
            <th> ID</th> 
            <th> username </th>
            <th>email </th>
            
            <th> password </th>
            <th> Action </th>

           
           
        </tr>
<?php foreach($record as $val){?>
        <tr>
            <td> <?php echo $val['id'];?></td>
          <td><?php echo $val['username'];?></td> 
            <td><?php echo $val['email'];?></td> 
            <!-- <td><?php echo $val['role'];?></td>-->   
            <td><?php echo $val['password'];?></td> 
           <!-- <td><?php echo $val['status'];?></td> -->
           <td><a href="updateData.php?id=<?php echo $val['id'];?>"">Edit  </a><br>
           <a href="TableData.php?id=<?php echo $val['id'];?>" class="text-danger" onClick="return confirm('Are you sure to delete this user?');"><i class="fa fa-fw fa-trash"></i> Delete</a>
          


        </tr>
<?php } ?>
</table>



</body>
</html>