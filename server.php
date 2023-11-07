<?php
$dbhost = 'localhost';
$username = 'root';
$password = 'password';
$dbname = 'formdata';
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



?>