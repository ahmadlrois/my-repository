<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `produk` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:dataProduk.php');
    }else{
        die(mysqli_error($con));
    }
}

?>