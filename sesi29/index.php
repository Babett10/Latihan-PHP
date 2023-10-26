<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Sesi 29</title>
</head>
<body>
    
    <div class="container-md" style="margin-top: 150px;">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Alamat</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //panggil DB
                    include("connection.php");
                    $query = mysqli_query($connect,"SELECT * FROM `pelanggan` ORDER BY id DESC");

                //cetak jumlah tabel
                while ($data = mysqli_fetch_array($query)) {
                ?>
             
                <tr>
                    <td><?php echo $data["nama"] ?></td>
                    <td><?php echo $data["jenis_kelamin"] ?></td>
                    <td><?php echo $data["telpon"] ?></td>
                    <td><?php echo $data["alamat"] ?></td>
                </tr>

                <?php   
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>