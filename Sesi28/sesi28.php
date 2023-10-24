<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Sesi28</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
</head>
<body>

<div class="container">
<center>
    <div class="row">
    <div class="col-lg-12 d-flex align-items-center" style="height: 700px;">
    <table class="table-bordered">
            <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Tanggal lahir</th>
                  <th scope="col">Umur</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Kelas</th>
                  <th scope="col">Nilai</th>
                  <th scope="col">Hasil</th>
                </tr>
              </thead>
            <?php
            //panggil json
            $data = file_get_contents("data.json");
            $students = json_decode($data);



            foreach ($students as $key => $student) {

            //Umur
            $tahun_lahir_obj = new DateTime($student->tanggal_lahir);
            $tahun_lahir = $tahun_lahir_obj->format('Y');
            $tahun_sekarang = date('Y');
            $umur = $tahun_sekarang - $tahun_lahir;
            
            //hasil
            $nilaii = $student->nilai;
            if ($nilaii >= 90 and $nilaii <= 100){
                $hasil = "A";
            }
            else if ($nilaii >= 80 and $nilaii < 90){
                $hasil = "B";
            }
            else if ($nilaii >= 70 and $nilaii < 80){
                $hasil = "C";
            }
            else {
                $hasil = "D";
            }
            //warna
            if ($key % 2 == 0) {
                $color = "white";
            }else {
                $color = "#D3D3D3";
            }
            ?>
            <tbody>
               <tr style="background-color: <?php echo $color ?>;">
                    <td><?php echo $key + 1 ."." ?></td>
                    <td><?php echo $student->nama?></td>
                    <td><?php echo $student->tanggal_lahir?></td>
                    <td><?php echo $umur?></td>
                    <td><?php echo $student->alamat?></td>
                    <td><?php echo $student->kelas?></td>
                    <td><?php echo $student->nilai?></td>
                    <td><?php echo $hasil?></td>
               </tr>
             </tbody>

            <?php
            }
            ?>
        </table>
    </div>
    </div>
</center>
</div>
</body>
</html>