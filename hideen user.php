<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
    integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> -->
<Style>
  
.userActive{
    display: block;
    max-width: 30%;
    height: 650px;
    transform: scale(1);
    position: absolute;
    border-radius: 5px;
    z-index: 3;
    top: 0;
    box-shadow: 2px 4px 5px #1a5a5ade;
   
}

.hideDiv{
    display: block;
    max-width: 30%;
    z-index: 3;
    transform: scale(0.2);
    background-color: #ffffff;
    position: absolute;
    border-radius: 5px;
    box-shadow: 2px 4px 5px #1f2b2bde; 
}

.header{
    display: grid;
    justify-content: center;
    align-items: center;
   
}
.imageslogo{
        width: 20%;
}
.FooterContent{
    display: grid;
    justify-content: center;
    align-items: center;
    row-gap: 20px;
}
.FooterContent #icon{
    color: black;
    border: 2px solid rgb(162, 151, 151);
    border-radius: 5px;
    text-align: center;
    background: #d3c8d4;
    padding: 7px 20px;
    text-decoration: none;
    font-weight: 600;
    
   
    
    
}
.FooterContent #icon .facebook{
    color: #1619f6;
    font-size: 20px;
}

.FooterContent #icon .envelope{
    color: #1d1a1a;
    font-size: 20px;
}
.FooterContent #icon .google{
    color: #e81f1f;
    font-size: 20px;
}



</style>
<body>
    <div>
        <p>wfsfasfsafsafsafdsajdfsakjsfsjkfagskjfsafkjsfhaskjfsahkjsfgkasfjh</p>
    </div>
    <section class="hiddenUser"  >
        <div class="container hideDiv" id="popup">
            <form action="">
                <div class="">
                    <div class="header">
                        <div class="text-center">
                            <img src="" class="w-25 imageslogo" alt="">
                        </div>
                        <div class="text-center">
                            <h3>Sign up or log in</h3>
                            <p>Continue with Facebook, Google or email. If you don't have an account yet, one will be created.</p>
                        </div>
                    </div>
                </div>
                <div class="FooterContent">
                    <a href="" id="icon"><i class="fa fa-facebook facebook me-2"></i>Continue to Facebook</a>
                    <a href="" id="icon"> <i class="fa fa-envelope envelope me-2"></i>Continue to Mail</a>
                    <a href="" id="icon"><i class="fa fa-google google me-2"></i>Continue to Google</a>
                    <a href="">haven't recieve your conformation Email?</a>
                    <div class="footer">
                        <div class="Term">
                            <a href=""> Terms of Use</a>
                            <a href="">Privacy Policy</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    
</body>
</html>