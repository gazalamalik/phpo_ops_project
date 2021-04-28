<?php
include ('dbConnection.php');
//include ('posts.php');

$obj1 = new DB();
 
$record = $obj1->DisplayPosts();

if(isset($_GET['id'])){
    $del = $obj1->deletePosts($_GET['id']);
    if($del){
        header('Location: postsDisplay.php');
    }else{
        echo $del;
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head><title>Post Dashboard</title></head>
<body>
<center><h1>Post Dashboard</h1></center>
<div class="container p-2 flex-box mb-3">
        <div id="cards_landscape_wrap-2">
            <div class="container bg-white">
            <div class="d-flex justify-content-center mb-3">
                <a href="posts.php" class="btn btn-outline-success btn-md shadow-lg col-lg-1 "><i class="fas fa-plus-circle"></i>&nbsp; Create Post</a>
            </div>
            <br>
                <div class="row">
                    <?php foreach ($record as $val) {
                        ?>
                    
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            <a href="postDetail.php?id=<?php echo $val['id'] ?>"></a>
                                <div class="card-flyer">
                                    <div class="text-box">

                                        <!--<div class="image-box">
                                           <img src="../Storage/Images/PostImages/<?php echo $r['filename'] ?>" alt="" />
                                        </div>-->

                                        <div class="text-container " style="border:red; border-width:1px; border-style:solid;">
                                               
                                            <h3><?php echo $val['id'] ?><br><?php echo $val['title'];?>  </h3>
                                            <p><?php echo $val['sort_desc'];?><br>
                                                <?php echo $val['long_desc'];?></p>

                                                <td><a href="updatePosts.php?id=<?php echo $val['id'];?>"">Edit  </a><br>
                                                   <a href="postsDisplay.php?id=<?php echo $val['id'];?>" class="text-danger" onClick="return confirm('Are you sure to delete this user?');"><i class="fa fa-fw fa-trash"></i> Delete</a>
                                          <!--  <small><?php  echo $r['created_at'] ."\n"; ?></small>-->
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                    <?php  } ?>
                </div>
            </div>
        </div>
     
</div>









                 
                 
                







</body>
</html>

