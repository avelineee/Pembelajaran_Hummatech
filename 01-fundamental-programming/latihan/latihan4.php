<?php

$NamaProduk = "Laptop Lenovo";
$Harga = 12500000;
$Berat = 2.5;
$Tersedia = true;
$Deskripsi = null;   
$Kategori = ["Elektronik", "Komputer", "Laptop"];

echo "=== DETAIL PRODUK ===" . PHP_EOL;
echo "Nama Produk: " . $NamaProduk . PHP_EOL;
echo "Harga: Rp " . number_format($Harga, 0, ',', '.') . PHP_EOL; //MENAMPILKAN HARGA DENGAN FORMAT RUPIAH
echo "Berat: " . $Berat . " kg" . PHP_EOL;
echo "Tersedia: " . $Tersedia .PHP_EOL;
echo "Deskripsi: " . $Deskripsi . PHP_EOL;
echo "Kategori: " . implode(", ", $Kategori) . PHP_EOL; //MENDE KLARASIKAN ARRAY


echo PHP_EOL;
echo "=== CEK TIPE DATA ===" . PHP_EOL;
var_dump($NamaProduk); //MENAMPILKAN TIPE DATA DAN NILAI
var_dump($Harga);
var_dump($Berat);
var_dump($Tersedia);
var_dump($Deskripsi);
var_dump($Kategori);    
