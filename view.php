
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
while($row = mysqli_fetch_assoc($result)){
    $modelname = $row['modelname'];
    $color = $row['color'];
    $storage = $row['storage'];
    $camera = $row['camera'];
    $price = $row['price'];
    echo '<div class="container">
    <h1 class="bg-primary">PRODUCT</h1>
    <button><i class="fa fa-arrow-left"></i>Back</button>
    <div class="row p-4">
    <div class="col-lg-7">image</div> 
    <div class="col-lg-5 p-3 ">
    
       
        <div class="container bg-light p-5">
        <div class="d-flex justify-content-between mb-3">
        <span><b>'.$modelname.'</b></span>
        <span class="">$<b>'.$price.'</b></span>
        </div>
        <div id="colorTab" class="mb-3">
        <span>COLOR: <b>'.$color.'</b></span>
        </div>
        <div class="mb-3" id="cameraStorageTab">
        <span>Storage: '.$storage.'</span>
        <span>Camera: '.$camera.'</span>
        <span>Price: '.$price.'</span>
        </div>
        <div class="" id="btnTab">
        <button class="btn btn-primary" id="add to cart"><i class="fa fa-shopping-bag"></i>Add to Cart</button>
        <button class="btn btn-teriatary" id="buynow">Buy Now</button></div>
        </div>
        
    </div>
    </div>
    </div>';
}
?>

</body>
</html>

