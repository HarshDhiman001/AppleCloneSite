<?php
    include 'connect.php';
    $id=$_GET['deleteid'];
    echo $id;
    die;
    $sql="DELETE FROM `appledata` WHERE `appledata`.`id`=$id";
    $data=mysqli_query($con,$sql);
    if($data)
    {
    echo "deleted";
    }
    else
    {
    echo "not deleted";
    }
    include 'home.php';
?> 