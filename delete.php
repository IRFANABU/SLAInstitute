<?php 

            include('server.php');
          
            if(isset($_GET['delete']))
            {
                $productid = $_GET['delete'];
                echo $productid;
                // for($i=0; $i<count($productid); $i++)
                // {
                    // $delID = $productid[$i];
                
                // }
                $sql = "delete from productdetails where id = '$productid'";
                $result = $conn->query($sql);
                if($result){
                    echo 'suucess';
                    header('location:cartPage.php');

                }
                else{
                    die("something error" .mysqli_error($conn));
                }
            
            }
    
?>