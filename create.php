<?php
include_once "./crud.php";
include_once "./db.php";


$crudsdata = new Crud();
$message=$crudsdata->create();





?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


  <div class="container mt-5">

<h1 class="text-center bg-info rounded p-3 w-50 mx-auto">Add New Product</h1>

<?php 
if ($message) {
    echo
    "<h4 class='text-center bg-success rounded p-3 w-50 mx-auto'>$message</h4>";
}
 ?>



  <form class="w-50 mx-auto" action="" method="post" enctype="multipart/form-data">

  <div class="form-group m-1">
    <!-- <label for="exampleInputEmail1">Name</label> -->
    <input type="text" class="form-control" name="name" placeholder="Enter Product Name">
    
  </div>
  <div class="form-group m-1">
   
    <input type="number" class="form-control" name="price" placeholder="Enter Price">
  </div>
  <div class="form-group m-1">
  
    <input type="text" class="form-control" name="description" placeholder="Enter Description">
  </div>
  <div class="form-group m-1">
    
    <input type="file" class="form-control" name="photo" >
  </div>
  

  
  <button name="submit" class="btn btn-primary">Submit</button>
</form>



    
  </div>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>