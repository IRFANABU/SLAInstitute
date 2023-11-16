<?php 

            include('server.php');
          
            if(isset($_POST['DeleteProduct']))
            {
                $productid = $_GET['checkit'];
                echo $productid;
                for($i=0; $i<count($productid); $i++)
                {
                    $delID = $productid[$i];
                $sql = "delete from productdetails where id = '$delID'";
                $result = $conn->query($sql);
                }
                if($result){
                    echo 'suucess';
                }
                else{
                    die("something error" .$mysql->connect_error());
                }
            
            }
    
?>