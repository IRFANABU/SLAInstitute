

<?php

 class dbconnect{

function insert_query(){
    require ('server.php');
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $cpwd = $_POST['conformpassword'];
<<<<<<< HEAD
   
    $sql = "Insert into registerform (`firstname`,`lastname`,`email`,`password`,`conformpassword`) values ('" .$firstname."','" .$lastname."','" .$email."','" .$pwd."','" .$cpwd."')";
   if( $conn->query($sql)===TRUE){
    echo "values submitted";
=======
    $sql = "Insert into registerform (`firstname`,`lastname`,`email`,`password`,`conformpassword`) values ('" .$firstname."','" .$lastname."','" .$email."','" .$pwd."','" .$cpwd."')";
   if( $conn->query($sql)===TRUE){
    echo "values submitted";
    header('cartPage.php');
    exit;
>>>>>>> main
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
<<<<<<< HEAD
 }

=======


    
 }


 

>>>>>>> main
 $obj = new dbconnect();
 $obj->insert_query();
//  $obj->read_query();
?>




<!-- // if($result->num_rows >0){
//     while ($row = $result->fetch_assoc()){
//         echo 
//         "<div class =d-flex w-50 bg-dark>
//         <table>
//         <thead>
//         <tr>
//         <th >ID</th>
//         <th>username</th>
//         <th>Password</th>
//         </tr>
//         </thead>
//           <tbody> 
//           <tr class=table-primary>
//           <td >". $row["id"]."</td>
//           <td>". $row["firstname"]."</td>
//           <td>". $row["lastname"]."</td>
//           </tr>
//           </tbody> 
//         </table>
//         </div>";
//     }
// }
// else{
//     echo "result not";
// } -->

    









