<?php
include "connect.php";
    if(isset($_POST['submit'])) {
        $code=$_POST['product_code'];
        $name=$_POST['product_name'];
        $line=$_POST['product_line'];
        $scal=$_POST['product_scal'];
        $qty=$_POST['product_qty'];
        $description=$_POST['product_des'];
        
    $sql = "INSERT INTO products (product_code, product_name, product_line, product_scal, product_qty, product_des)
    VALUES ('$code', '$name', '$line', '$scal', '$qty', '$description')";
    
    $result=mysqli_query($conn,$sql);
    if ($result) {
     // echo "New record created successfully";
      header('location:display.php');
    } else {
      echo $conn->error;
    }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product Crud</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Crud Products</h1>
                    </div>
                    <div class="card-body">
                    <form method="post">
                       <div class="form-group">
                            <label>Product Code</label>
                            <input type="number" class="form-control" name="product_code" placeholder="Enter Your Code"> 
                       </div>
                       <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" class="form-control" name="product_name" placeholder="Enter Your Name"> 
                       </div>
                       <div class="form-group">
                            <label>Product Line</label>
                            <input type="text" class="form-control" name="product_line" placeholder="Enter Your line">
                        </div>
                        <div class="form-group">
                            <label>Product Scale</label>
                            <input type="text" class="form-control" name="product_scal" placeholder="Enter Your scale"> 
                       </div>
                       <div class="form-group">
                            <label>Product Quantity</label>
                            <input type="number" class="form-control" name="product_qty" placeholder="Enter Your Email">
                        </div>
                        <div class="form-group">
                            <label>Product Desciption</label>
                            <input type="text" class="form-control" name="product_des" placeholder="Enter Your Email">
                        </div>
                         <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>