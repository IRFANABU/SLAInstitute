<?php

require_once('addProduct.php');
class addproduct{
    function insert_queryAddProduct(){
        
            include('server.php');
        
        $error = '';
        $modelName = $_POST['modelname'];
        $color1= $_POST['color'];
        $storage1 = $_POST['storage'];
        $imagep = $_FILES['image']['name'];
        $ram1 = $_POST['ram'];
        $camera1 = $_POST['camera'];
        $price1 = $_POST['price']; 

        // $this->validateInputs($imagep);
        
        if(!empty($imagep)){

            $filename= basename($_FILES['image']['name']);
           $fileType= pathinfo($filename,PATHINFO_EXTENSION);

           $allowtype = array('jpg','png','jpeg',"webp");
           if(in_array($fileType,$allowtype)){

            $imageTemp = $_FILES['image']['tmp_name'];
            $imageContent = addslashes(file_get_contents($imageTemp));
           }
          }

          else if(!empty($price1)){
          echo $error = 'please';

          }
          
           $sql = "Insert into productdetails (modelname,color,`storage`,`image`,`created`,`ramType`,`cameraType`,`price`) values ('$modelName','$color1','$storage1','$imageContent',NOW(),'$ram1','$camera1','$price1')";
           $result= $conn->query($sql);
           if($result){
                 echo "successfully";
               header('location:cartPage.php');
            
           }
           else{
            
               echo '<span class="text-danger">Failed to posted</span>';
           }
          
          
        
        // }     
        
    } 
    
}

$obj = new addproduct();
 if((isset($_POST["addProduct"])) == true){

$obj->insert_queryAddProduct();
}



?>