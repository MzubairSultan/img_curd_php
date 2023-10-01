<?php
include ("connection.php");
$ids = $_GET['id'];
$displayquersy = "select * from img_reg where id = $ids";
$data = mysqli_query($conn,$displayquersy);
$result = mysqli_fetch_array($data);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>image Crud operation</title>
</head>
<body>
    <h1>Image crude operation</h1>
     <form action="#" method="POST" enctype="multipart/form-data">
      <label for="">Name</label><br>
      <input type="text" name="fname" value="<?php echo $result['name']  ?>"><br>
      <label for="">Pictures:</label><br>
      <input type="file" name="pic" id="" value="<?php echo $result['photos'] ?>"><br>
      <input type="submit" value="Uplode Image" name="submit">
     </form>
</body>
</html>
<?php
  error_reporting(0);
  
   $userpicname  = $_FILES["pic"]["name"];
   $tempuserpicname  = $_FILES["pic"]["tmp_name"];
   $imgfolder = "myphoto/".$userpicname;
  // echo  $imgfolder;
   move_uploaded_file($tempuserpicname,$imgfolder); 
   //print_r($userpic);
   if(isset($_POST['submit'])){
    
    $name =$_POST['fname'];
   // $inserquery = "insert into img_reg (name,photos)values('$name','$imgfolder')";
   // $data = mysqli_query($conn,$inserquery);
    $updateQuery = "UPDATE img_reg SET name= '$name', photos='$imgfolder' where id=$ids";
    $data = mysqli_query($conn,$updateQuery);
   if($data){
        echo "data is updated";
    }else{
        echo "data is not updated";
    }
   }
  
  
    
?>
