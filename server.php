<?php
$dbhost = 'localhost';
$username = 'root';
$password = 'password';
$dbname = 'formdata';

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
?>