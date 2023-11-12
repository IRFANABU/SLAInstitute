
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="Styles/viewproduct.css">

<body>
<div class="">

<nav class="navbar navbar-expand  ">

    <div class="container" id="insideDiv">

        <div class="title">
            <img src="image/logos.png" class=" w-25 object-fit-contain my-2" alt="">

        </div>
        <div class="collapse navbar-collapse justify-content-center" id="subDiv">
            <ul class="navbar-nav" id="head_ul">
                <li class="nav-item me-1 my-3" id="item_li">
                    <a href="index.php" class="nav-link">Home</a>

                </li>
                <li class="nav-item me-1 my-3">
                    <a href="about.php" class="nav-link">About Us</a>
                </li>
                <li class="nav-item me-1  my-3">
                    <a href="contact.php" class="nav-link">Contact</a>
                </li>
                <li class="nav-item me-1  my-3">
                    <a href="cartPage.php" class="nav-link">Product</a>
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
        <div class="menu me-2">
            <span class="fa fa-bars fs-4  me-3 " id="icon"></span>
        </div>
    </div>
</nav>
</div>




<?php

//  echo "Hello";
include ('server.php');

//get details from cartpage with id variable;

$product = $_GET['product'];
$sql = "select * from productdetails where id = '$product'";
$result = $conn->query($sql);
$tablerow = mysqli_num_rows($result);
if($tablerow > 0){
while($row = mysqli_fetch_assoc($result)){
    $modelname = $row['modelname'];
    $image = $row['image'];
    $color = $row['color'];
    $storage = $row['storage'];
    $camera = $row['cameraType'];
    $price = $row['price'];
    $ram = $row['ramType'];
    ?>
    <div class="container">
    
 
        <div class="row p-4" id="productDetailsRow">
        <div class="col-lg-6 p-5">
        <img src="data:image;charset=utf8;base64,<?php echo base64_encode($image);?>"class="rounded w-100 p-5 bg-light"/>
        </div> 
        <div class="col-lg-6 p-5" id="contentright">
    
       
        <div class="container" >
           
            <div>
                <div class="fs-1">
                <b><?php echo $modelname;?></b>
             </div>
             <div class="fs-5">
                <span><?php echo $color ?></span>
                <span>|</span>
                <span><?php echo $storage ?></span>
                <span>|</span>
                <span><?php echo $ram ?></span>
                </div>
            </div>
        </div>
        <div>
            <div class="fs-3">
                <?php echo "₹$price"; ?>
            </div>
            <div>
                <?php echo "M.R.P. ₹ $price(include of all taxes)" ;?>
            </div>
        </div>
        
        <div class="my-3" id="btnTab">
            <button class="btn btn-primary" id="add to cart"><i class="fa fa-shopping-bag"></i>Add to Cart</button>
            <button class="btn btn-teriatary" id="buynow">Buy Now</button></div>
        </div>  
     </div>
        </div>
  </div>;
<?php 

} }

else{
    echo "<h1 class=text-center>No data Found</h1>";
}


?>
<script src="Script/viewProduct.js"></script>
</body>
</html>

