<?php 

 if(isset($_POST['submit'])){
    include ('server.php');
   
    $name = $_POST['name'];
    $addressvalue = $_POST['address'];
    $code = $street = $pincode = "";
    $addresErr="";
    $splitvalues=(explode(" ",$addressvalue));
    $code=$splitvalues[0]; 
    $street=$splitvalues[1];
    $pincode=$splitvalues[2]; 
    $error='';
    if(isset($name) || isset($addressvalue)){
        
      if(empty($name)|| empty($addressvalue)){
        $error="fields are required";
      }else{  
      $sql = "Insert into address (name,doorno,streetname,pincode) values ('$name','$code','$street',$pincode)";
      $result= $conn->query($sql); 
      $conn->close();
      foreach($splitvalues as $values){
        echo $values."</br>"; 
      }
     }

    }   
 }
?>
<?php

// function Validate($a,$n){
//     $error ='' ;
//     if(empty($addressvalue)){
//         $errors="requied";
//      }
//      else{
//         $errors="";
//      }
//      if(empty($n)){
//         $error="requied";
//      }
//  }

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<script type="text/Javascript">
    var formLogin = document.getElementById('addressform');
    formLogin.addEventListener("submit", (event) => {
    event.preventDefault();
    alert("hello from oho server");
    
})
</script>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script type="text/Javascript">
       var formLogin = document.getElementById("addressform");
    formLogin.addEventListener("submit", (event) => {
    event.preventDefault();
    alert("hello from oho server");
    
})
</script>
<body>
    <div class="container justify-content-center">
    <form action="newone.php" method="POST" class="form w-50 bg-light" id="addressform">
        <h2>DATA</h2>
        <div class="col-6 mb-3">
            <Label>Name</Label>
        <input type="text" name="name" class="form-control">
        <span class="text-danger"><?php echo $error ?></span>
        </div>
        <div class="col-6 mb-3">
        <label>Address</label>
        <input type="text" name="address" class="form-control">
        <span class="text-danger"><?php echo $error ?></span>
        </div>
        <button type="submit" name="submit"  class="btn btn-primary">Click</button>
    </form>
    </div>

</body>
</html>