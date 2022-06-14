<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Rating</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $id=$_GET['detailid'];
                $sql="Select * from `produk` where id=$id";
                $result=mysqli_query($con,$sql);
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $id=$row['id'];
                        $nama=$row['nama'];
                        $harga=$row['harga'];
                        $stok=$row['stok'];
                        $rating=$row['rating'];

                        echo '
                        <tr>
                            <td>'.$nama.'</td>
                            <td>'.$harga.'</td>
                            <td>'.$stok.'</td>
                            <td>'.$rating.'</td>
                        </tr>
                        ';
                    }
                    
                }
                ?>
            </tbody>
        </table>

        <a href="dataProduk.php" class="btn btn-success">Kembali</a>
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>