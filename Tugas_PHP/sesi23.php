<?php
//nomor 1

    $angka = array("satu","dua","tiga","empat","lima");
    echo"===nomor 1=== <br>";
    $totall = count($angka);
    for ($i=$totall -1; $i >= 0 ; $i--) { 
        echo"$angka[$i] <br>"; 
    }
    echo"<br>";

//nomor 2
    $buah = array("apel","nanas","mangga","jeruk");
    $total = count($buah);
    echo"===nomor 2=== <br>";
    echo "Terdapat $total buah <br>";
    echo"<br>";

//nomor 3
    $nomor = array(7,3,4,9);
    $jumlah = array_sum($nomor);
    echo"===nomor 3=== <br>";
    echo "Totalnya adalah $jumlah <br>";
    echo"<br>";

//nomor 4
    echo"===nomor 4=== <br>";
    for ($i=1; $i <= 10; $i++) {
        $hasil = 1 * $i; 
        echo "1 x $i = $hasil  <br>";
    }
?>