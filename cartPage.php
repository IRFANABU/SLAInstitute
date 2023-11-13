

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
<script  src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="Styles/product.css">
</head>


<body>
    <div class="">

        <nav class="navbar navbar-expand fixed-top  ">

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
                <div class="menu me-2">
                    <span class="fa fa-bars fs-4  me-3 " id="icon"></span>
                </div>
            </div>
        </nav>
    </div>
<!-- 
    <h1 class=" text-center text-dark text-uppercase  my-5"> All Products</h1> -->

    <div id="inputSearch" class="d-flex justify-content-center p-3">
    <h1 class=" text-center text-dark text-uppercase  my-5"> All Products</h1>
        <!-- <input type="search" name="searchProduct" id="searchProductData" class="text-center" placeholder="Search your product.. ">

        <button id="searchBtn">Search</button>

        <div class="span">
            <span id="errorSpan" class="span"></span>
        </div> --> 
        <div class="ms-auto p-3">
            <button class="btn btn-primary" id="AddProduct"><a href="addProduct.php" class="text-white text-decoration-none">Add Product</a></button>
        </div>
    </div>

        <hr>




    <section class="container">
                <div class="" id="navbarContent">
                    <ul class="" id="categoryList">
                        <li class="">
                            <a href=""> 
                                <img src="	https://image01-in.oneplus.net/ebp/202207/25/1-M00-3D-EA-CpgM7WLejuqARha3AABPSqotiPU419.svg" alt="All">
                                <span>All</span>
                            </a>
                          <div class=''></div>

                        </li>
                        <li>
                            <a href=""><img src="https://image01-in.oneplus.net/india-oneplus-statics-file/epb/202306/19/hpMRKnU28yqTPgbW.svg"alt="Mobile">
                            <span>Mobile</span>
                    
                    </a>
                    <div class=''></div>
                </li>
                        <li><a href="" ><img src="	https://image01-in.oneplus.net/india-oneplus-statics-file/epb/202306/20/kjgydKpmA2hhwdYQ.svg" alt="Tablet"><span class="me-1">Tablet</span></a>
                        <div class=''></div>
                    </li>
                        <li><a href=""><img src="https://image01-in.oneplus.net/ebp/202207/25/1-M00-3D-EE-CpgM7mLej1CAJ1GYAAAJTrg6_6k449.svg" alt=""><span>Audio</span></a> <div class=''></div></li>
                        <li><a href=""><img src="https://image01-in.oneplus.net/ebp/202207/25/1-M00-3D-EE-CpgM7mLek3SAVKlUAAAJrOjtRsE386.svg" alt=""><span>Wearable</span></a> <div class=''></div></li>
                    </ul>
                </div>
                   
            <div class="row" >
                <div class="col-lg-4 col-sm-3 p-4" id="content-left">
                <div id="offerDiv" class="p-3 g-3 mb-3">
                    <div>
                    <span>Offers</span>
                    </div>
                        <div>
                        <input type="checkbox" value="On Sale">
                        <label for="onsale">On Sale</label>
                        </div>
                        <div>
                        <input type="checkbox" value="On Sale">
                        <label for="withgift">With Gift</label>
                        </div>
                </div>
                <div id="stockDiv" class="p-3 mb-2">
                <span>Stock Availability</span>
                <div>
                        <input type="checkbox" value="On Sale" id="Instock">
                        <label for="Instock">In Stock</label>
                        </div>
                </div>
                <div id="RamStorageDiv" class="p-3 mb-2 ">
                <span>RAM and STORAGE</span>
                    <ul class="list-group">
                        <div>
                        <input type="checkbox" value="On Sale" id='6+128GB'>
                        <label for="6+128GB">6+128GB</label>
                        </div>
                        <div>
                        <input type="checkbox" value="On Sale" id="8+128GB">
                        <label for="8+128GB">8+128GB</label>
                        </div>
                        <div>
                        <input type="checkbox" value="On Sale" id="8+256GB">
                        <label for="8+256GB">8+256GB</label>
                        </div>
                        <div>
                        <input type="checkbox" id="12+128GB"value="On Sale">
                        <label for="12+128GB">12+128GB</label>
                        </div>
                        <div>
                        <input type="checkbox" id="12+256GB" value="On Sale">
                        <label for="12+256GB">12+256GB</label>
                        </div>
                    </ul>
                </div>
                <div id="Price Range" class="d-flex row g-3 p-3">
                  <div>
                  <span>Price Range</span>
                  </div>  
                <div class="" id="show-range">
                ₹0 - ₹150,000
                </div>
                <div class="">
                <input type="hidden" name="pricerange" id="priceMin" class="" value="0"/>
                <input type="hidden" name="pricerange" class="" id="priceMax" value="150000"/>
                </div>
                <div id="sliderRangePrice" class="bg-danger w-75"></div>
                <div class="d-flex row justify-content-between p-2">
                    <div class="col min-count me-2">
                    <span class="count-num">₹0</span>
                    </div>
                    <div class="col max-count ms-5" >
                    <span class="count-num">₹150,000</span>
                    </div>
                </div>
               
                </div>   
                </div>

               
                <div class="col-lg-8">
                
                    <div class="my-3">
                        <label for="category" class="text-gray">Rank By
                        <select name="recommended" id="">
                        <option value="">Low to High</option>
                        <option value="">High to Low</option>
                       </select> 
                        </label>
                      
                    </div>
                     <div id="productList" class="p-4">
                


           

          
       
                        
                     </div>

                </div>

            </div>
               
        
</div>
</section>
<section class=" z-1">
        <footer class="bg-dark" id="footerDown">
            <div class="container  text-light mb-3 ">
                <div class="container text-light">
                    <div class="row justify-content-around">
                        <div class="col-lg-6 col-md-12 col-sm-6 mb-3">
                            <img src="image/logos.png" class="object-fit-contain bg-light w-25 " alt="">
    
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
    


<script>
    
$(document).ready(function(){

    fetch_data();

    function fetch_data()
    {
   
    var minValue =  $("#priceMin").val();
    var maxValue =  $("#priceMax").val();
        $.ajax({
            url:"fetchProduct.php",
            method:"POST",
            data:{minValue:minValue,maxValue:maxValue},
            success:function(data){
                $('#productList').html(data);
            }
        
        })
    }

    $("#sliderRangePrice" ).slider({
        range:true,
        min:0,
        max:150000,
        values:[0,150000],
        step:50,
        stop:function(event,ui){
            $("#show-range").html("<div><span class=count-num>"+"₹"+ui.values[0]+"</span><span class=gap> - </span><span class=count-num>"+"₹"+ui.values[1]+"</span></div>");
            $("#priceMin").val(ui.values[0]);
            $("#priceMax").val(ui.values[1]);
            fetch_data();
        }
    });
});



</script>

</body>




<script type="text/javascript" src="Script/cartPage.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</html>