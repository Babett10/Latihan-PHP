<?php

    // Tugas 1 (output bilangan ganjil / genap)
    $bilangan = 1222;
    if ($bilangan % 2 == 0 and $bilangan != 0) {
        echo "angka : $bilangan = bilangan genap <br>";
    }
    elseif ($bilangan == 0) {
        echo "angka 0";
    }
    else {
        echo "angka : $bilangan = bilangan ganjil <br>";
    }

    // Tugas 2 (Menghitung Tahun Kabisat)
    $tahun = 1603;
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
?>