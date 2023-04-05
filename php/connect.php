<?php
$server="localhost";
$username="root";
$password="";
$dbname="apple";
$con=mysqli_connect($server,$username,$password,$dbname);
if(!$con)
{
    echo ("not connected");
}
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$sql="INSERT INTO `appledata`(name,email,password) VALUES ('$name','$email','$password')";
if($con->query($sql)==true)
{
    echo '<div class="alert alert-info" id="alert" role="alert">
    Welcome ' .$name.' Login now !
  </div>';
}
else
{
    echo "error";
}
include 'home.php';
?>
