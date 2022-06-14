<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Data Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <button class="btn btn-warning mb-4 mt-5"><a href="addProduk.php" class="btn">Tambah Data Produk</a></button>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql="Select * from `produk`";
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
                        <th scope="row">'.$id.'</th>
                            <td>'.$nama.'</td>
                            <td>'.$harga.'</td>
                            <td>'.$stok.'</td>
                            <td>'.$rating.'</td>
                            <td>
                                <button class="btn btn-primary"><a href="detail.php?detailid='.$id.'" class="text-light" style="text-decoration: none;">Detail</a></button>
                                <button class="btn btn-success"><a href="update.php?updateid='.$id.'" class="text-light" style="text-decoration: none;">Update</a></button>
                                <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light" style="text-decoration: none;">Delete</a></button>
                            </td>
                        </tr>
                        ';
                    }
                    
                }
                ?>
            </tbody>
        </table>
    </div>
    
    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>