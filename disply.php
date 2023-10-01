<?php
include("connection.php");
$displayquery = "select * from img_reg ";
$data = mysqli_query($conn,$displayquery);

if($data){
    echo "data is display";
}else{
    echo "data is not display"; 
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display image</title>
</head>
<body>
    <table border="1px">
      <tr>
        <th>Id</th>
        <th>name</th>
        <th>image</th>
        <th  colspan="2">Operations</th>
      </tr>
      <?php 
          while($result = mysqli_fetch_array($data))
          {


      ?>
        <tr>
        <td><?php echo $result['id'] ?></td>
        <td><?php echo $result['name'] ?></td>
        <td><img src="<?php echo $result['photos']?>"alt="" width="50px" height="50px" ></td>
        <td><a href="update.php?id=<?php echo $result['id'] ?>">Edit</a></td>
        <td><a href="delete.php?id=<?php echo $result['id'] ?>">Delete</a></td>
      </tr>
      
       <?php
          }
       ?>

       

    </table>
</body>
</html>