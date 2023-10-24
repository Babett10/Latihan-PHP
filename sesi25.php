<?php

    // Tugas 1 (output bilangan ganjil / genap)
    $angka = 1222;
    if ($angka % 2 == 0 and $angka != 0) {
        echo "angka : $angka = bilangan genap <br>";
    }
    elseif ($angka == 0) {
        echo "angka 0";
    }
    else {
        echo "angka : $angka = bilangan ganjil <br>";
    }

    // Tugas 2 (Menghitung Tahun Kabisat)
    $tahun = 2023;
    if ($tahun % 400 == 0) {
        echo "tahun $tahun adalah tahun kabisat <br>";
    }
    else if ($tahun % 400 != 0 and $tahun % 400 != 0 and $tahun % 4 == 0) {
        echo "tahun $tahun adalah tahun kabisat <br>";
    }
    else {
        echo "tahun $tahun bukan tahun kabisat <br>";
    }

    //Tugas 3 
    $nilaii = 89;
    if ($nilaii >= 90 and $nilaii <= 100){
        echo "nilai $nilaii = A";
    }
    else if ($nilaii >= 80 and $nilaii < 90){
        echo "nilai $nilaii = B";
    }
    else if ($nilaii >= 70 and $nilaii < 80){
        echo "nilai $nilaii = C";
    }
    else if ($nilaii >= 60 and $nilaii < 70){
        echo "nilai $nilaii = D";
    }
    else {
        echo "nilai $nilaii = E";
    }

?>