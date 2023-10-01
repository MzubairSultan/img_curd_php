<?php
$serverName="localhost";
$username="root";
$password="";
$db="img_crud";
$conn=mysqli_connect($serverName,$username,$password,$db);
if($conn){
    echo "conntion is establish";
}else{
    echo "connection failed";
}



?>