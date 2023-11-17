<?php 

    session_start();
    include('server.php');

    if(isset($_POST["loginBtn"]))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        
        if(!empty($email) && $password!='')
        {

            $sql =("select * from t_admin where adi ='".$email."' and adp='".$password."'");

          $result = $conn->query($sql);
          $res = mysqli_fetch_row($result);

          if($res){
           header('location:index.php');
          }
          else{
            echo '<script>';
            echo 'alert("Invalid Login ! Please try again.")';
            echo '</script>';

          }
            
        }

    }
    
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Login</title>
</head>

<link href="http://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<script src="http://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="Stylesheet" href="Styles/login.css">
<style>
  
</style>

<body class="bg-white">
    <div>
        <nav class="navbar navbar-expand bg-primary">

        </nav>
    </div>
    <section class="">
        <div class="d-flex justify-content-center align-items-center" id="loginSign">
            <form class="form" id="formLogin" method="POST" action="login.php">
                <h2 class="text-light text-bold">LOGIN</h2>
                <div class=" text-center">
                    <img src="image\logos.png" class='' alt="form-logo">
                </div>

                <div class="form-group  mb-3">
                    <label for="" class="mb-3 text-white ">Username</label>
                   <i class="fa fa-envelope" style="position: absolute; padding:50px;margin-left: 200px; "></i>
                   <input type="text" class="form-control mb-3 " placeholder="Email" id="Email" name="email">
                    <small class="error"></small>  
                </div>
                <div class="form-group mb-3">
                    <label for="" class="mb-3 text-white">Password</label>
                    <i class="fa fa-eye" style="position: absolute; padding:50px;margin-left: 205px; "></i>
                    <input type="text" class="form-control  mb-3" placeholder="Password" id="Password" name="password">
                    <small class=""></small>
                </div>
                <button type="submit" class="btn btn-outline-primary mb-3 my-2" id="loginButton" name="loginBtn">Login</button>
                <span class="text-center text-light mb-2 me-2">Create a new account <a href="create_Account.php"id="signup" class="ms-2">Signup</a></span>

            </form>
        </div>
    </section>
    <script src="http://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="Script/login.js"></script>
</body>


</html>