<?php
include("connection.php");
// Delete querry
$ids = $_GET['id'];
$delQuery = "DELETE from img_reg where id = $ids";
$data = mysqli_query($conn,$delQuery);
if($data){
    echo "data is deleted";
}
    else{
        echo "data failed to delete";  
    }

?>