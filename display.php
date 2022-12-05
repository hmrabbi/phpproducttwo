<?php 
include'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Displsy</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
       
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1> <button class="btn btn-success"><a class="text-light" href="insert.php">Add Product</a></button></h1>
                    </div>
                    <div class="card-body">
                    <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl No</th>
      <th scope="col">Product Code</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Line</th>
      <th scope="col">product_scal</th>
      <th scope="col">product_qty</th>
      <th scope="col">product_des </th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sql = "SELECT * FROM products";
    $result = mysqli_query($conn,$sql);
    
    if ($result){
     // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
        $id=$row["id"];
        $code=$row["product_code"];
        $name=$row["product_name"];
        $line=$row["product_line"];
        $scal=$row["product_scal"]; 
        $qty=$row["product_qty"];
        $des=$row["product_des"];

        echo '<tr>
        <td>'.$id.'</td>
        <td>'.$code.'</td>
        <td>'.$name.'</td>
        <td>'.$line.'</td>
        <td>'.$scal.'</td>
        <td>'.$qty.'</td>
        <td>'.$des.'</td>
        <td>
        <button class="btn btn-success"><a class="text-light" href="update.php?updateid='.$id.'">Update</a></button>
        <button class="btn btn-success"><a class="text-light" href="delete.php?deleteid='.$id.'">Delete</a></button>
        </td>
        </tr>';
     }
    } 
    ?>
    
    
  </tbody>
</table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>