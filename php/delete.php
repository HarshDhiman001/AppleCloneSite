<?php
    include 'connect.php';
    $id=$_GET['deleteid'];
    $sql="DELETE FROM `appledata` WHERE `appledata`.`id`=$id";
    $data=mysqli_query($con,$sql);
    if($data)
    {
        echo '<div class="alert alert-danger" id="alert" role="alert">
        Deleted!
      </div>';
    }
    else
    {
    echo "not deleted";
    }
    include 'home.php';
?> 