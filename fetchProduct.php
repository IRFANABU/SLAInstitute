<?php  
include ('server.php');


$result = $conn->query("select * from productdetails");
if(isset($_POST['minValue'],$_POST['maxValue']) && (!empty($_POST['maxValue'])) && (!empty($_POST['minValue'])))
{
    $result= $conn->query("select * from productdetails where price Between '".$_POST['minValue']."' AND '".$_POST['maxValue']."' ");
}
$total_row = mysqli_num_rows($result);
$output = '';
 if($total_row > 0){

     // using fetch_object or fetch_assoc and fetch_array() method to fetch data from database;

    while($row = $result->fetch_object()){
     //    $uid= $row['id'];
     //     $model= $row['modelname'];
     //    $imagep= $row['image'];  
    //  echo '<img src=data:image;base64,'.$row['$image'].' />   
    
    
  echo $output = '
  <div class="cardProduct">
  
  <div class="ms-auto my-2">
  </div>
     <div class="imgContainer">
          <img src="data:image;charset=utf8;base64,'.base64_encode($row->image).'"/>
     </div>
     <div  class="nameDiv">
         <h4>'.$row->modelname.'</h4>
     </div>
     <div id="buttonss">
            
         <button id=ViewBtn class="btn btn-primary" name="DeleteProduct" type="submit"><a href="view.php?product='.$row->id.'" class="text-white text-decoration-none">View Product</a></button>
     </div>
    
 </div>';
    
 
    
    
}
// echo $output = '
 
//  <button class="btn btn-danger" type="submit" id="deleteProduct" name="DeleteProduct"><a href="delete.php" class="text-white text-decoration-none">Delete</a></button>
 
//  ';
    
}  
else{
      echo $output = "<h2  style=text-align:center>No Data Found </h2>";
} 

// echo $output;     

?>