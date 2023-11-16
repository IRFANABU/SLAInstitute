<?php



//  echo "Hello";
include ('server.php');

//get details from cartpage with id variable;

// $product = $_GET['product'];
$sql = "select * from productdetails";
$result = $conn->query($sql);
$tablerow = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
  
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

</head>
<style>
    * {
    box-sizing: border-box;

}

ul:first-child {
    text-transform: uppercase;
    font-weight: bold;
    font-size: smaller;
}


nav {
    background-image: linear-gradient(#987899, #232455);
    display: grid;
}

#nava:hover {
    border-radius: 3px;
    background-color: white;

}

nav .menu {
    display: none;
    cursor: pointer;
}
#user{
    display: inline-flex;
}

nav img {
    max-width: 200px;
    box-shadow: 2px 4px 5px #2b252c;
    border-radius: 4px;
}

</style>
<body>
<div class="">

<nav class="navbar navbar-expand ">

    <div class="container" id="insideDiv">

        <div class="title">
            <img src="image/logos.png" class=" w-25 object-fit-contain my-2" alt="">

        </div>
        <div class="collapse navbar-collapse justify-content-center" id="subDiv">
            <ul class="navbar-nav" id="head_ul">
                <li class="nav-item me-1 my-3" id="item_li">
                    <a href="index.php" class="nav-link" id="nava">Home</a>

                </li>
                <li class="nav-item me-1 my-3">
                    <a href="about.php" class="nav-link"id="nava">About Us</a>
                </li>
                <li class="nav-item me-1  my-3">
                    <a href="contact.php" class="nav-link" id="nava">Contact</a>
                </li>
                <li class="nav-item me-1  my-3">
                    <a href="cartPage.php" class="nav-link" id="nava">Product</a>
                </li>
            </ul>

        </div>
        <div class="me-5" id="user">
            <div>
                <i class="text-small fa fa-search me-3" id="searchIcon"></i>

            </div>
            <div>
                <i class="fa fa-bell me-3"></i>

            </div>
            <div>

                <i class="text-small fa fa-user" id="userIcon"></i>
            </div>
        
        </div>
        <!-- <div class="menu me-2">
            <span class="fa fa-bars fs-4  me-3 " id="icon"></span>
        </div> -->
    </div>
</nav>
</div>
    <div class="container">
        <H1>Product Configuration</H1>
    <div class=" row  align-items-center">
    <div class="col-lg-4 p-3">
       <button class="btn btn-primary" id="AddProduct"><a href="addProduct.php" class="text-white text-decoration-none">Add Product</a></button>
    </div> 
       <div class="table-responsive-md p-5 border">
       <table class="table table-striped" id="ProductTable">
            <thead >
                <tr class="bg-primary">
                <th>SL.NO</th>
                    <th>Model Name</th>
                    <th>Color</th>
                    <th>Storage</th>
                    <th>Camera Type</th>
                    <th>Ram Type</th>
                    <th>Action</th>
                </tr>
            </thead>
       
            <tbody>
            <?php 
        
        
            if($tablerow > 0)
            {
            while($row = mysqli_fetch_assoc($result)){
                $productID = $row['id'];
                $modelname = $row['modelname'];
                $image = $row['image'];
                $color = $row['color'];
                $storage = $row['storage'];
                $camera = $row['cameraType'];
                $price = $row['price'];
                $ram = $row['ramType'];

                echo '
                <tr>
                <td>'.$productID.'</td>
                <td>'.$modelname.'</td>
                <td>'.$color.'</td>
                <td>'.$storage.'</td>
                <td>'.$camera.'</td>
                <td>'.$ram.'</td>
                <td>
                <div class="">
                <button class ="btn btn-danger" type="submit" name="DeleteProduct"><a href="delete.php?delete='.$productID.'" class="text-white text-decoration-none">Delete</a></button>
                <button class ="btn btn-info">Edit</button>
                </div>
                </td>
                
                </tr>';
            }}
            ?>

                <!-- <tr>
                    <td><?php echo $modelname; ?></td><br>
                    <td><?php echo $color; ?></td>
                    <td><?php echo $storage; ?></td>
                    <td><?php echo $camera; ?></td>
                    <td><?php echo $ram; ?></td>
                </tr>-->
            </tbody>
        </table>
                     
       </div>
      
    </div>
    </div>


    <Script>
        $(document).ready(function(){
            $('#ProductTable').dataTable();
        })
    </Script>
</body>
</html>