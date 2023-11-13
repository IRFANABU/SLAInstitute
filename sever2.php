
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php while($row = mysqli_fetch_array($result)){ ?>
   <?php $images=$row['image'];?>
    <div>
     <img src="data:image/jpg;charset-utf8;base64,<?php echo base64_encode($images); ?>"/>
</div>
  <?php } ?>
</body>
</html>  -->

//   $status =  $statusMsg ='';
    //   if(!empty($_FILES['pic']['name'])){

    //     //get file info 
    //     $imagep = basename($_FILES['pic']['tmp_name']);
    //     $imagetype = pathinfo($imagep,PATHINFO_EXTENSION);
    //     $allotypes= array('jpg','png','jpeg','gif');
    //     if(in_array($allotypes,$imagetype)){
    //     $imagename = $_FILES['pic']['name'];
    //     $imagess = addslashes(file_get_contents(($imagep)));
    //     $sql = "Insert into productdetails (modelname,color,storage,imagename,image,ram,camera,price) values ('$modelname1','$color1','$storage1','$imagename','$imagep','$ram1','$camera1','$price1')";
    //     $conn->query($sql);
    //     $conn->close();
    
    //     }

    //     else{
    //         $statusMsg="please insert these Types";
    //     }
    //     }
    //     else{
    //         $statusMsg="please Select an image";
    //         $conn->error;
    //     }