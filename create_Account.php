<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Form</title>
    <style>
      
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="Script/account.js" defer></script>
   <link rel= stylesheet href="Styles/register.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container_form ">

        <div class="row">
            <form class="form" id="formSubmit"  action="crud.php" method="POST">
                <div>
                    <h2>Create Account</h2>
                </div>
                <div class="input-group">
                    <label for="firstname">Firstname</label>
                    <input type="text" name="firstname" id="f1" placeholder="Enter your name">
                   <small></small>
                </div>
                <div class="input-group">
                    <label for="Lastname">Lastname</label>
                    <input type="text" name="lastname" id="l1" placeholder="Enter your name ">
                    <small></small>
                    
                </div>
              
                <div class="input-group">
                    <label for="Email">Email</label>
                    <input type="email" name="email" id="e1" placeholder="Enter your mail">
                    <small></small>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="p1" placeholder="Enter your Password">
                    <small></small>
                   
                </div>
                <div class="input-group">
                    <label for="password">Conform password</label>
                    <input type="password"  name="conformpassword" id="p2" placeholder="Enter your Password">
                    <small></small>
                    
                </div>
                 <button type="submit" id="btn_form" class="btn btn-success">Register</button>
                
            </form>
        </div>
    </div>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</body>



</html>