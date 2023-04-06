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
?>
