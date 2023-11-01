<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<link href="http://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
    integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<script src="http://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="Styles/login.css">
<style>
  
</style>

<body>
    <div>
        <nav class="navbar navbar-expand bg-primary">

        </nav>
    </div>
    <section class="">
        <div class="d-flex justify-content-center align-items-center" id="loginSign">
            <form class="form" id="formLogin">
                <h2 class="text-light text-bold">LOGIN</h2>
                <div class=" text-center">
                    <img src="image\logos.png" class='' alt="form-logo">
                </div>

                <div class="form-group  mb-3">
                    <label for="" class="mb-3 text-white ">Username</label>
                   <i class="fa fa-envelope" style="position: absolute; padding:50px;margin-left: 200px; "></i>
                   <input type="text" class="form-control mb-3 " placeholder="Email" id="Email" name="Email">
                    <small class="error"></small>  
                </div>
                <div class="form-group mb-3">
                    <label for="" class="mb-3 text-white">Password</label>
                    <i class="fa fa-eye" style="position: absolute; padding:50px;margin-left: 205px; "></i>
                    <input type="text" class="form-control  mb-3" placeholder="Password" id="Password" name="Password">
                    <small class=""></small>
                </div>
                <button type="submit" class="btn btn-outline-primary mb-3 " class="my-2" id="loginButton">Login</button>
                <span class="text-center text-light mb-2 me-2">Create a new account <a href="create_Account.html"id="signup" class="ms-2">Signup</a></span>

            </form>
        </div>
    </section>
    <script src="http://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="Script/login.js"></script>
</body>


</html>