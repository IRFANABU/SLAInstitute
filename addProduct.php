<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel=stylesheet href="Styles/addproduct.css">
</head>
<body>

    <div class="container w-75 border-radius rounded" id="formcont" >
        <div class="bg-primary p-3"></div>
    <form  action="crud2.php" class="bg-light p-3" method="POST" id="productForm" enctype="multipart/form-data">
        <div class=" row">
            <h2>Add Product</h2>
        <div class="mb-3 col-lg-6 col-md-12 col-sm-12">
        <label for="productname">Model Name</label>
        <input type="text" class="form-control" name="modelname">
     
        </div>
        <div class="mb-3 col-lg-6 col-md-12">
        <label for="Color">Color</label>
        <input type="text" class="form-control" name="color" >
      
        </div>
        <div class="mb-3 col-lg-4 col-md-12">
        <label for="storage">Storage</label>
       <select name="storage" id="storageType" class="form-select" >
            <optgroup>
            <option selected>Open this select menu</option>
                <option value="64 GB">64 GB</option>
                <option value="128 GB">128 GB</option>
                <option value="256 GB">256 GB</option>                
                <option value="512 GB">512 GB</option>
            </optgroup>
       </select>
      
      
        </div>
        <div class="col-lg-4 col-md-12">
             <label for="File">Pic</label>
            <input type="file" class="form-control" name="image">
        </div>
        <div class="mb-3 col-lg-4 col-md-12">
        <label for="ram">Ram</label>
       <select  id="ramType" class="form-select" name="ram">
            <optgroup>
            <option selected>Open this select menu</option>
                <option value="1">4 GB</option>
                <option value="2">6 GB</option>
                <option value="3">8 GB</option>                
                <option value="4">12 GB</option>
            </optgroup>
       </select>
        </div>
        <div class="mb-3 col-lg-6">
        <label for="camera">Camera Pixel</label>
        <input type="text" class="form-control" name="camera">
        </div>
        <div class="mb-3 col-lg-6">
        <label for="price">Price</label>
        <input type="number" class="form-control" name="price">
        
        </div>
        <div class="col-lg-6 col-md-12">
        <button type="submit" name="addProduct" class="btn btn-dark w-50" id="AddBtn">Add</button>
        </div>  
    </form>

    </div>
    
</body>
</html>