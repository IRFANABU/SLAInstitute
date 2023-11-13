<?php
$dbhost = 'localhost';
$username = 'root';
$password = 'password';
$dbname = 'formdata';
<<<<<<< HEAD

$conn = new mysqli($dbhost,$username,$password,$dbname);
if($conn->connect_error){
    die ("connect failed" .$mysql->connect_error);
}
else{
    // echo "Connection okayed";
}
// $sql = "Insert into registerform (`firstname`,`lastname`,`email`,`password`,`conformpassword`) values ('hello','wolrd','irfan12@gmail..com','1233','122')";
// $sql = "Insert into productdetails (modelname,`color`,`storage`,`image`,`created`,`ramType`,`cameraType`,`price`) values ('fsfsaf','color1','storage1','333',NOW(),'ram1','camera1','2333')";

// if( $conn->query($sql)===TRUE){
//     echo "values submitted";
//    }
//    else{
//     echo "fasle";
//    }
=======
$conn = new mysqli($dbhost,$username,$password,$dbname);
// $sql = "Insert into registerform (`firstname`,`lastname`,`email`,`password`,`conformpassword`) values ('" .$firstname."','" .$lastname."','" .$email."','" .$pwd."','" .$cpwd."')";

// $sql = "Create table ProductDetails (id INT AUTO_INCREMENT PRIMARY KEY, modelname VARCHAR(255),color VARCHAR(255),storage VARCHAR(255),image BLOB,ram VARCHAR(255),camera VARCHAR(255),price INT(255))";
if($conn->connect_error){
    
    die ("coonect failed" .$mysql->connect_error);
    
}
?>
<?php 

// $sql = "Insert into productdetails (modelname,color,storage,image,ram,camera,price) values ('samsung', 'black', 'srorage','image1','ram1','camera1','12222')";

// if($conn->query($sql)==True){
//     echo "posted";
// }

// echo "failed";



>>>>>>> main
?>