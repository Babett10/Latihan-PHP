<?php

//luas persegi
echo "Luas Persegi (S x S) <br>";
$sisi = 10; //input sisi
$luas_persegi = $sisi**2; //rumus luas persegi
echo "sisi = $sisi cm <br> luas = $luas_persegi cm <br>";

echo "==================================== <br>";

//luas persegi panjang
echo "Luas Persegi Panjang (P x L) <br>";
$panjang = 10; //panjang
$lebar = 5; // lebar
$volume_balok = $panjang * $lebar; //rumus luas persegi panjang 
echo "panjang = $panjang cm <br> lebar = $lebar cm <br> luas = $volume_balok cm <br>";

echo "==================================== <br>";

//luas segitiga
echo "Luas Segitiga (1/2 x a x t) <br>";
$alas = 9; //alas
$tinggi = 4; //tinggi
$luas_segitiga = 1/2 * $alas * $tinggi;
echo "alas = $alas cm <br> tinggi = $tinggi cm <br> luas = $luas_segitiga cm <br>";

echo "==================================== <br>";

//luas layang - layang
echo "luas layang - layang (1/2 x d1 x d2) <br>";
$d1 = 8; //diagonal 1
$d2 = 10; //diagonal 2
$luas_layang = 1/2 * $d1 * $d2;
echo "d1 = $d1 cm <br> d2 = $d2 cm <br> luas = $luas_layang cm <br>";


echo "==================================== <br>";

//luas trapesium
echo "luas Trapesium (1/2 x d1 x d2) <br>";
$a = 12;
$b = 8;
$tinggii = 7;
$luas_trapesium = 1/2 * ($a + $b) * $tinggii;
echo "a = $a cm <br> b = $b cm <br> tinggi = $tinggii cm <br> luas = $luas_trapesium cm <br>";


?>