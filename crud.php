

<?php
// session_start();
 class dbconnect{

function insert_query(){
    require ('server.php');
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $cpwd = $_POST['conformpassword'];
   $_SESSION['username'] = $firstname." ".$lastname;
    $sql = "Insert into registerform (`firstname`,`lastname`,`email`,`password`,`conformpassword`) values ('" .$firstname."','" .$lastname."','" .$email."','" .$pwd."','" .$cpwd."')";
   if( $conn->query($sql)===TRUE){
    echo "Data submitted";
    header('location:login.php');
   }
   else{
    echo "failed to post ";
   } 
    $conn->close();

}


    // function read_query(){
    //     require 'server.php'
    //     $sql = "select * from  registerform";
    //     $result = $conn->query($sql);
    //     echo $result;
    //     $conn->close();   
    // }
 }

 $obj = new dbconnect();
 $obj->insert_query();
//  $obj->read_query();


?>






    









