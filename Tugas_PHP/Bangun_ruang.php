<?php

//volume kubus (S x S x S)
echo "volume kubus (S x S) <br>";
$sisi = 10; //input sisi
$volume_kubus = $sisi**3; //rumus luas kubus
echo "sisi = $sisi cm <br> volume = $volume_kubus cm <br>";

echo "==================================== <br>";

//volume balok 
echo "volume balok (P x L x t) <br>";
$panjang = 10; //panjang
$lebar = 5; // lebar
$tinggi = 7; //tinggi
$volume_balok = $panjang * $lebar *$tinggi; //rumus luas balok 
echo "panjang = $panjang cm <br> lebar = $lebar cm <br> tinggi = $tinggi cm <br> volume = $volume_balok cm <br>";

echo "==================================== <br>";

//volume tabung
echo "volume tabung π x r² x t) <br>";
$phi = 3.14; //phi 
$r = 7; //jari - jari
$tinggii = 10; //tinggi
$volume_tabung = $phi * ($r **2) *$tinggii;
echo "r = $r cm <br> π = $phi <br> tinggi = $tinggii cm <br> volume = $volume_tabung cm <br>";










?>