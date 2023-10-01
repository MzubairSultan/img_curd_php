<?php
include ("connection.php");

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
      <input type="text" name="fname"><br>
      <label for="">Pictures:</label><br>
      <input type="file" name="pic" id=""><br>
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
    $inserquery = "insert into img_reg (name,photos)values('$name','$imgfolder')";
    $data = mysqli_query($conn,$inserquery);
    if($data){
        echo "data is sent into data base";
    }else{
        echo "data is not send to data base";
    }
   }
  
  
    
?>