<?php  
  
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
    integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>    
<link rel = stylesheet href="Styles/home.css">
<body>
    <div>
        <nav class="navbar navbar-expand" id="head_nav">
            <div class="container" id="insideDiv">
                <div class="title">
                    <img src="image/logos.png" class=" w-25 object-fit-contain my-2" alt="">
                </div>
            
               
                <div class="collapse navbar-collapse justify-content-center">
                    <ul class="navbar-nav " id="head_ul">
                        <li class="nav-item me-1 my-3" id="item_li">
                            <a href="home2.php" class="nav-link">Home</a>
                            
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
            </div>
            <div class="user me-5">
                <div>
                    <i class="text-small fa fa-search me-3" id="searchIcon"></i>

                </div>
                <div>
                    <i class="fa fa-bell me-3"></i>

                </div>
                <div>   
                   <!-- <a href="login.html" style="  color: black;"><i class="text-small fa fa-user " id="userIcon"></i></a></select> -->
                   <i class="fa fa-user" id="ulList"  aria-hidden="true"></i>
                    <div class="ulSign me-2 " >
                        
                        <ul class="list-group p-1 me-2 grid" id="ulData">
                            <li  class="list-group-item"><span class=""><?php  echo $_SESSION['username']; ?></span></li>
                            <li class="list-group-item "><a href="index.php" style="color: rgb(170, 52, 52);" ><i class="text-small " id="userIcon"></i>Login</a></li>
                            <li class="list-group-item"><a href="create_Account.php" style="color: rgb(165, 59, 59);"><i class="text-small  " id="userIcon"></i>Signup</a></li>
                        </ul>
                    </div>
                   
                </div>
            
            </div>
            <div class="menu me-2" id="menu">
                <span class="fa fa-bars fs-5"  id="icon"></span>
            </div>
        </nav>
     
    </div>
    <section>
        <h1 class="text-center"><?php echo "Welcome"; ?> <span class="text-uppercase"><?php  echo $_SESSION['username']; ?></span></h1>
    </section>
<section  class=""  id="carouselTab">
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="image/oneplus-carousel.webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="image/oneplus2.webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/oneplus-carousel.webp" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>
<section class="container-fluid bg-light text-center p-5" id="videoSec">
    <h1 >Newly Launch of Apple Iphone 15 Pro <mark class="rounded bg-warning">5G</mark></h1>
    <div class="container  p-5">
        <video src="program/video/Introducing iPhone 14 Pro _ Apple_HD.mp4" class=" object-fit-contain " muted autoplay loop  style="border-radius:30px;"></video>
        <!-- <button class="btn-primary rounded w-25">View</button> -->
    </div>

    <div class="row d-flex bg-black align-items-center p-5">
        <hr>
        <div class="">
        <h2 class="text-light">Relentless innovation defines who we are OnePlus inspires through innovation.</h2>
        </div>
       
        <div class="col-lg-3 col-sm-2">
            <h1 class="text-light "><Span class="text-danger">Never Settle <i class="fa fa-arrow-right"></i></Span> Evolve your digital life.</h1>
        </div>
        <div class="col-lg-9 col-sm-10 p-5">
            <img src="image/neversettle.webp" alt="neversettle" class="w-100">
        </div>
        <div class=" col-lg-6">
            <div class="mb-3">
                <div class="row g-0">
                <div class="col-md-6">
                    <img src="image/onepluscardr.webp" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 bg-dark align-items-end">
                    <div class="card-body text-light align-items-end ">
                    <p class="card-title">OxygenOS 14</p>
                    <p class="card-text fs-2">Evolved to Exceed</p>
                    <p class="card-text">The signature OxygenOS experience has evolved. Driven by the next-generation Trinity Engine, innovative features and refreshed design elements, discover the pinnacle of fast and smooth.</p>
                    </div>

                </div>
                </div>
            </div>
            
        </div>
        <div class="col-lg-6">
        <div class="mb-3">
                <div class="row g-0 ">
               
                <div class="col-md-6 bg-dark align-items-end">
                    <div class="card-body text-light align-items-end">
                    <p class="card-title">Capture Every Horizon</p>
                    <p class="card-text fs-2">2023 OnePlus Photography Awards Winners</p>
                    <p class="card-text">The 2023 OnePlus Photography Awards is dedicated to honoring everyone to use their phones to create their own works, to capture wonderful moments, and to tell the stories behind the lens.</p>   
                    </div>

                </div>
                <div class="col-md-6">
                    <img src="image/onepluscardl.webp" alt="" class="img-fluid">
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="" id="highlight section">
<div class="container text-center p-3">
<h1>Week Highlights</h1>
<nav class="nav nav-pills nav-fill">
  <a class="nav-link active" aria-current="page" href="#">Mobiles</a>
  <a class="nav-link" href="#">Smart Watch</a>
  <a class="nav-link" href="#">Iphones</a>
  <a class="nav-link disabled" aria-disabled="true">Disabled</a>
</nav>
</div>

</section>
    <div class="container-fluid">
        <div class="container w-75">
            <h2 class="text-gray text-uppercase text-center lh-lg mb-5">Contact Mobile PlatForm Support Team</h2>
            <div class="row">
                <div class="col-lg-6 col-md-5 col-sm-12">
                    <form>
                        <input type="text" placeholder="Name*" class="form-control  mb-3">
                        <input type="email" placeholder="Email*" class="form-control mb-3">
                        <input type="phonenumber" placeholder="Phone*" class="form-control mb-3">
                        <select name="" id="op" aria-label="label for the select"
                            class="form-select dropdown-toggle mb-3">
                            <option value="select">Select Country</option>
                            <option value="india">India</option>
                            <option value="pak">Pakistan</option>
                            <option value="uae">UAE</option>
                        </select>
                        <button type="button" class="btn btn-danger mb-4" id="submitButton">Submit Form</button>
                    </form>
                </div>
                <div class=" col-lg-6 col-md-7 col-sm-12">
                    <p class="text-gray fs-5">
                        If you have any question feel free to contact us whatsapp or email we will be sure to get back
                        to you as soon as possible.
                    </p>
                    <p><span class="text-danger fw-bold">whatsapp:</span>+91-687-456-6778</p>
                    <p class=""><span class="text-danger fw-bold">Email:</span>sales@mobileplatform.com</p>
                    <p><span class="text-danger fw-bold">Address:</span></p>
                </div>

            </div>

        </div>

    </div>

    <section class=" z-1">
        <footer class="bg-dark" id="footerDown">
            <div class="container  text-light mb-3 ">
                <div class="container text-light">
                    <div class="row justify-content-around">
                        <div class="col-lg-6 col-md-12 col-sm-6 mb-3">
                            <img src="image/logos.png" class="object-fit-contain bg-light " alt="">
    
                        </div>
                        <div class="my-4 col-lg-6 col-md-12 ">
                            <Span class=" fs-5  ">
                                <i class="fa fa-instagram me-3"></i>
                                <i class="fa fa-twitter me-3"></i> 
                                <i class="fa fa-facebook me-3"></i>
                                <i class="fa fa-envelope"></i>
                                </Span>
    
                        </div>
                       
                    </div>
                    <div class="row" id="2">
                        <div class=" col-lg-6 col-md-12 col-sm-12 mb-3">
                            <h5>CONTACT</h5>
                        
                            <span class="me-3"> <i class="fa fa-envelope"></i> sales@mobileplatform.com</span>
                            <span class="me-3" ><i class="fa fa-phone"></i> +91-6874566778 </span>
                            <span><i class="fa fa-whatsapp"></i> +91-687-456-6778</span>
    
                        </div>
                        <div class=" col-lg-6 col-md-12 col-sm-12 mb-3">
                          <h5>COMPNAY</h5>
                          <span class="me-3"> About</span>
                          <span class="me-3" >Team</span>
                          <span class="me-3">Contact</span>
                          <span class="me-3"> Careers</span>
                         
                        </div>
                        <div class=" col-lg-6 col-md-12 col-sm-12 mb-3">
                            <h5>HELP</h5>
                            <span class="me-3"> Term of use</span>
                            <span class="me-3" >Privacy policy</span>
                            <span>Web Notification</span>
    
    
                        </div>
                        <div class=" col-lg-6 col-md-12">
                            <h5>Help</h5>
                        </div>
                    </div>
                </div>
                <div class="text-center text-light bg-dark smaller p-5 ">
                    <hr>   
                    Mobiles © 2023. All Rights Reserved.
                </div>
            
        </footer>
    </section>
    <script type="text/javascript" src="Script/main.js"></script>
    <script src="Script/mainpage.js"></script>
    
</body>

</html>