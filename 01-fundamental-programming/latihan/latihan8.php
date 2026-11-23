<?php

$nama = "Alea";
$umur = 20;

if ($umur <= 5){
    $kategori = "Balita";
} elseif ($umur <= 12) {
    $kategori = "Anak-anak";
} elseif ($umur <= 17) {
    $kategori = "Remaja";
} elseif ($umur <= 59) {
    $kategori = "Dewasa";
} elseif ($umur >= 60) {
    $kategori = "Lansia";
} else {
    $kategori = "Umur tidak valid";
}  

echo "=== DATA DIRI ===" . PHP_EOL;
echo "Nama: " . $nama . PHP_EOL;
echo "Umur: " . $umur . " tahun" . PHP_EOL;
echo "Kategori: " . $kategori . PHP_EOL;
