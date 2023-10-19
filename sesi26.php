<?php

    // Tugas 1 (output bilangan ganjil / genap)
    for ($angka = 1; $angka <= 10; $angka++){       
        if ($angka % 2 == 0 and $angka != 0) {
            echo "angka $angka adalah bilangan genap <br>";
        }
        elseif ($angka == 0) {
            echo "angka 0";
        }
        else {
            echo "angka $angka adalah bilangan ganjil <br>";
        }
    }
    echo "<br>";

    // Tugas 2 (Menghitung Tahun Kabisat)
    for ($tahun = 2000; $tahun <= 2023; $tahun++)
    {
        if ($tahun % 400 == 0) {
            echo "tahun $tahun adalah tahun kabisat <br>";
        }
        else if ($tahun % 400 != 0 and $tahun % 400 != 0 and $tahun % 4 == 0) {
            echo "tahun $tahun adalah tahun kabisat <br>";
        }
        else {
            echo "tahun $tahun bukan tahun kabisat <br>";
        }
    }
    echo "<br>";
    

    //Tugas 3 
    for ($i=10; $i >= 1 ; $i--) { 
        for ($j=1; $j < $i; $j++) { 
            echo "$j";
        }
        echo "<br>";
    }
?>