<?php
include_once "./crud.php";
include_once "./db.php";

$crudsdata = new Crud();
$fetchproducts = $crudsdata->index(); 
if (isset($_POST['BtnDelete'])) {
    $id=$_POST['id'];
    $crudsdata->delete($id);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php raw practice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>


<div class="container mt-5">
<button>Add Product</button>

    <h1 class="text-center my-5">Php Raw Review</h1>
    
    <table class="table table-hover table-dark table-striped w-50 mx-auto" border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Photo</th>

                <th>Action</th>
            </tr>
        </thead>
        <tbody>
           
            <?php
            foreach ($fetchproducts as $product) {
                // echo "<pre>";
                // print_r($product);
                // echo "</pre>";
                $image=$product['photo']??$product['photo'];
                echo <<<razib
                <tr>
                    <td>$product[id]</td>
                    <td>$product[name]</td>
                    <td>$product[price]</td>
                    <td> <img src="./img/$image" alt='' width='50px' height='50px' style='border-radius:50%'></td>
                    <td>
                    <form method="post">
                   
                    <input type="hidden" class="form-control" name="id" value="$product[id]">

                    <button class='btn btn-info'>Show</button>
                        <button class='btn btn-danger' name='BtnDelete'>X</button>
                        <button class='btn btn-primary'>Update</button>
                    
                    </form>
                        
                    </td>
                </tr>

                razib;
            }
            ?>
            
        </tbody>
    </table>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
