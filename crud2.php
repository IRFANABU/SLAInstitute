<?php


class addproduct{
    function insert_queryAddProduct(){
        
        include ('server.php');
        include ('addProduct.php');
       
        $modelname = $_POST['model'];
        $color1= $_POST['color'];
        $storage1 = $_POST['storage'];
        // $image1 = $_POST['pic'];
        $imagep = $_FILES['pic']['tmp_name'];
        $ram1 = $_POST['ram'];
        $camera1 = $_POST['camera'];
        $price1 = $_POST['price']; 

        $this->validateInputs($modelname);
                $sql = "Insert into productdetails (modelname,color,storage,image,ram,camera,price) values ('$modelname','$color1','$storage1','$imagep','$ram1','$camera1','$price1')";
                $result= $conn->query($sql);
                if($result===TRUE){

                    header('location:cartPage.php');
                }
                else{
                        echo "failed to posted";
                }
        
    } 
    
    function validateInputs(){
        $errors="";
        if(isset($_POST['addProduct'])){
    
            if(empty($a)){
                $errors="required";
            }
            else{
                $errors="";
            }
        }
    }
  

}

$obj = new addproduct();
if((isset($_POST["addProduct"])) == true){
$obj->insert_queryAddProduct();
$obj->validateInputs($a);
}



?>