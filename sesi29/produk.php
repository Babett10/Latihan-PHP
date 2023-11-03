<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Sesi 29</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-5 mt-5">
                <table class="table table-bordered" >
                <thead>
                    <tr>
                        <th scope="col"><a href="index.php" style="color: black; text-decoration: none;">Pelanggan</a></th>
                        <th scope="col"><a href="supplier.php" style="color: black; text-decoration: none;">Supplier</a></th>
                        <th scope="col"><a href="produk.php" style="color: black; text-decoration: none;">Produk</a></th>
                    </tr>
                </thead>
                </table>               
            </div>
    <div class="container-md col-md-12">
    <h1>Data Produk </h1>
    <a href="form/tambah_produk.php" style="text-decoration: none;">Tambah Data Produk</a></th>
        <table class="table table-bordered" >
            <thead>
                <tr>
                    <th scope="col">Kode Produk</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Satuan</th>
                    <th scope="col">Supplier</th>
                    <!-- <th scope="col">Supplier</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                //panggil DB
                    include("connection.php");
                    $query = mysqli_query($connect,"SELECT kode_produk,nama_produk,harga,stok,stok,satuan,nama FROM `produk`
                    INNER JOIN supplier ON produk.supplier_id = supplier.id
                    ORDER BY produk.id ASC;");

                //cetak jumlah tabel
                while ($data = mysqli_fetch_array($query)) {
                ?>
             
                <tr>
                    <td><?php echo $data["kode_produk"] ?></td>
                    <td><?php echo $data["nama_produk"] ?></td>
                    <td><?php echo $data["harga"] ?></td>
                    <td><?php echo $data["stok"] ?></td>
                    <td><?php echo $data["satuan"] ?></td>
                    <td><?php echo $data["nama"] ?></td>
                </tr>

                <?php   
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>