<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from `produk` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$nama=$row['nama'];
$harga=$row['harga'];
$stok=$row['stok'];
$rating=$row['rating'];

if(isset($_POST['submit'])){
    $nama=$_POST['nama'];
    $harga=$_POST['harga'];
    $stok=$_POST['stok'];
    $rating=$_POST['rating'];

    $sql="update `produk` set id=$id,nama='$nama',harga='$harga',stok=$stok,rating=$rating where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:dataProduk.php');
    }else{
        die(mysqli_error($con));
    }
}
?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tambah Data Produk</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <form method="post" class="mt-5">
                <div class="mb-3">
                    <label class="form-label">Nama Produk</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $harga; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Stok</label>
                    <input type="number" class="form-control" id="stok" name="stok" value="<?php echo $stok; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Rating</label>
                    <input type="number" step="0.1" class="form-control" id="rating" name="rating" value="<?php echo $rating; ?>">
                </div>
                <button type="submit" name="submit" class="btn btn-warning">Update</button>
                <a href="dataProduk.php" class="btn btn-success">Kembali</a>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>
