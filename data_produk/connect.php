<?php

$con = new mysqli('localhost', 'root', '', 'produk');


if(!$con){
    die(mysqli_error($con));
} 
?>
