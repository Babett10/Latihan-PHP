<?php

//input berat
$nama = "Albert";
$berat = 60; //berat dalam Kg
$tinggi_cm = 175; //tinggi dalam cm
$tinggi = $tinggi_cm / 100; //konversi tinggi jadi meter
$Bmi = $berat / ($tinggi ** 2);
$hasil_bmi = number_format($Bmi,1);
//keterangan
if ($Bmi < 18.5) {
    $keterangan = "kurus";
}
elseif ($Bmi >=18.5 && $Bmi <= 22.9) {
    $keterangan = "sedang";
}
else{
    $keterangan = "gemuk";
}

echo "=== Menghitung BMI === <br>";
echo " <br>";
echo "BMI = Berat(kg) / tinggi(m)² <br>";
echo "<br>";
echo "berat = $berat Kg <br> tinggi = $tinggi_cm cm <br>";
echo "<br>";
echo "halo $nama, nilai BMI anda adalah  $hasil_bmi. maka anda termasuk $keterangan";












?>