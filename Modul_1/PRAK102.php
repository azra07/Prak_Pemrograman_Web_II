<?php
$Jari_jari = 4.2;
$Tinggi = 5.4;
$Panjang = 8.9;
$lebar = 14.7;
$Sisi = 7.9;

$volume_tabung = M_PI * pow($Jari_jari, 2) * $Tinggi;

echo "" . number_format($volume_tabung, 3, ',', '.') . " m3";
?>