<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="Styles/product.css">

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
                <div class="user me-5 d-flex" id="user">
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
                    <span class="fa fa-bars   me-3 " id="icon"></span>
                </div>
            </div>
        </nav>
    </div>

    <h1 class=" text-center text-dark text-uppercase"> All Products</h1>

    <div id="inputSearch" class="d-flex justify-content-center">

        <input type="search" name="searchProduct" id="searchProductData" class="text-center"
            placeholder="Search your product.. ">

        <button id="searchBtn">Search</button>

        <div class="span">
            <span id="errorSpan" class="span"></span>
        </div>
    </div>
        <hr>
    <div class="container">
        <div id="productList" class="">

        </div>
    </div>
    
</body>
<script type="text/javascript" src="Script/cartPage.js"></script>

</html>