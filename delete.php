<?php 
include "connect.php";
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql = "DELETE FROM products where id=$id";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "Record Deleted Successfully!";
    }else{
        echo $conn->error;
    }
}
 ?>